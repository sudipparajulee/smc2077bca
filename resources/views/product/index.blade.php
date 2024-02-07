@extends('layouts.app')
@section('content')
    <h1 class="font-bold text-3xl text-blue-800">Products</h1>
    <hr class="h-1 bg-red-500">

    <div class="my-5 text-right">
        <a href="{{ route('product.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded ">Add Product</a>
    </div>

    <table class="w-full">
        <tr>
            <th class="border p-2">S.N.</th>
            <th class="border p-2">Category</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Description</th>
            <th class="border p-2">Price</th>
            <th class="border p-2">Stock</th>
            <th class="border p-2">Status</th>
            <th class="border p-2">Photo</th>
            <th class="border p-2">Action</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td class="border p-2">1</td>
            <td class="border p-2">{{$product->category_id}}</td>
            <td class="border p-2">{{$product->name}}</td>
            <td class="border p-2">{{$product->description}}</td>
            <td class="border p-2">{{$product->price}}</td>
            <td class="border p-2">10</td>
            <td class="border p-2">Show</td>
            <td class="border p-2">Photo</td>
            <td class="border p-2">
                <a href="" class="bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                <a href="" class="bg-red-600 text-white px-3 py-1 rounded">Delete</a>
            </td>
        </tr>
        @endforeach

    </table>
@endsection
