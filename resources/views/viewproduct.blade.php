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
            <form action="{{route('addtocart')}}" method="POST">
                @csrf
                <input type="number" class="border-2 border-gray-300 p-2 w-24" name="quantity" id="quantity" value="1" min="1" max="{{$product->stock}}"> <br>
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="submit" value="Add to Cart" class="bg-blue-500 text-white py-2 px-4 mt-2 inline-block cursor-pointer">
            </form>
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
