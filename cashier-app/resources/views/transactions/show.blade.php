@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Transaction {{ $transaction->id }}</h1>
    <p>Date: {{ $transaction->created_at }}</p>
    <p>Total: {{ $transaction->total }}</p>
    <p>Paid: {{ $transaction->paid }}</p>
    <p>Change: {{ $transaction->change }}</p>
    <h3>Items</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaction->items as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
