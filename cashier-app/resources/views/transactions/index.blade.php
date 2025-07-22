@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Transactions</h1>
    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-2">New Transaction</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->created_at }}</td>
                <td>{{ $transaction->total }}</td>
                <td>
                    <a href="{{ route('transactions.show', $transaction) }}" class="btn btn-sm btn-info">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $transactions->links() }}
</div>
@endsection
