@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @method('PUT')
        @include('categories.form')
    </form>
</div>
@endsection
