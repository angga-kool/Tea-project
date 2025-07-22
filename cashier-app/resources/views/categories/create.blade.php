@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @include('categories.form')
    </form>
</div>
@endsection
