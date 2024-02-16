@extends('layouts.master')
@section('content')
    <div class="px-24 my-10 grid grid-cols-3 gap-10">
        <div class="">
            <img src="{{asset('images/products/'.$product->photopath)}}" class="w-full h-96 object-cover" alt="">
        </div>
        <div>
            <h1 class="text-4xl font-bold">{{$product->name}}</h1>
            <p class="text-gray-700 my-5">Stock : {{$product->stock}}</p>
            <p class="text-gray-700 font-bold text-2xl">Rs {{$product->price}}</p>
            <a href="" class="bg-blue-500 text-white py-2 px-4 mt-2 inline-block">Add to Cart</a>
        </div>
        <div>
            <p class="text-gray-700 my-5">Free Delivery</p>
            <p class="text-gray-700 my-5">7 Days Return Policy</p>
            <p class="text-gray-700 my-5">Cash on Delivery</p>
        </div>
    </div>
    <div class="px-24">
        <h2 class="font-bold text-3xl">Product Description</h2>
        <p class="text-gray-700">{{$product->description}}</p>
    </div>
@endsection
