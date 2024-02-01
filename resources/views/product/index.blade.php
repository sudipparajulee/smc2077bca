@extends('layouts.app')
@section('content')
    <h1 class="font-bold text-3xl text-blue-800">Products</h1>
    <hr class="h-1 bg-red-500">

    <div class="my-5 text-right">
        <a href="{{ route('product.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded ">Add Product</a>
    </div>
@endsection
