@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Detail</h1>
    <p>Name: {{ $category->name }}</p>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
