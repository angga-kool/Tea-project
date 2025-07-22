<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with('items.product')->paginate();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'total' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'paid' => 'required|numeric',
        ]);

        $transaction = Transaction::create([
            'user_id' => $request->user()->id,
            'total' => $validated['total'],
            'discount' => $validated['discount'] ?? 0,
            'paid' => $validated['paid'],
            'change' => $validated['paid'] - ($validated['total'] - ($validated['discount'] ?? 0)),
        ]);

        foreach ($validated['items'] as $item) {
            $product = \App\Models\Product::find($item['product_id']);
            $total = $item['quantity'] * $product->sale_price;
            $transaction->items()->create([
                'product_id' => $product->id,
                'quantity' => $item['quantity'],
                'price' => $product->sale_price,
                'total' => $total,
            ]);

            $product->decrement('stock', $item['quantity']);
        }

        return redirect()->route('transactions.show', $transaction);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        $transaction->load('items.product');
        return view('transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        // Typically transactions are immutable; left empty.
        return redirect()->route('transactions.show', $transaction);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index');
    }
}
