@extends('layouts.master')
@section('content')
    <h2 class="text-center text-3xl font-bold my-10">{{$category->categoryname}} Products</h2>

    <div class="grid grid-cols-4 gap-10 pb-10 px-24">
        @foreach($products as $product)
            <div class="border p-4 rounded shadow">
                <img src="{{asset('images/products/'.$product->photopath)}}" class="w-full h-44 object-cover" alt="">
                <h2 class="text-xl font-bold my-2">{{$product->name}}</h2>
                <p class="text-gray-700 line-clamp-2">{{$product->description}}</p>
                <p class="text-gray-700 font-bold mt-2">Rs {{$product->price}}</p>
                <a href="{{route('viewproduct',$product->id)}}" class="bg-blue-500 text-white py-2 px-4 mt-2 inline-block">View</a>
            </div>
        @endforeach
    </div>
@endsection
