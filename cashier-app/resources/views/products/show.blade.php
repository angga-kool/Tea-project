@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Detail</h1>
    <p>Name: {{ $product->name }}</p>
    <p>Barcode: {{ $product->barcode }}</p>
    <p>Category: {{ $product->category->name }}</p>
    <p>Purchase Price: {{ $product->purchase_price }}</p>
    <p>Sale Price: {{ $product->sale_price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
