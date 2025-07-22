@extends('layouts.app')

@section('content')
<div class="container">
    <h1>New Transaction</h1>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div id="items"></div>
        <button type="button" onclick="addItem()" class="btn btn-secondary mb-2">Add Item</button>
        <div class="mb-3">
            <label class="form-label">Total</label>
            <input type="number" step="0.01" name="total" class="form-control" id="total">
        </div>
        <div class="mb-3">
            <label class="form-label">Discount</label>
            <input type="number" step="0.01" name="discount" class="form-control" value="0">
        </div>
        <div class="mb-3">
            <label class="form-label">Paid</label>
            <input type="number" step="0.01" name="paid" class="form-control" id="paid">
        </div>
        <input type="hidden" name="items" id="itemsInput">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<script>
let items = [];
function addItem() {
    const productId = prompt('Product ID');
    const qty = parseInt(prompt('Qty'), 10);
    if (productId && qty) {
        items.push({product_id: productId, quantity: qty});
        document.getElementById('itemsInput').value = JSON.stringify(items);
    }
}
</script>
@endsection
