@extends('layouts.master')
@section('content')
    <h1 class="text-4xl font-bold text-center my-10">Latest Products</h1>

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
