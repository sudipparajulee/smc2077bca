@extends('layouts.app')
@section('content')
    <h2 class="font-bold text-3xl text-blue-800">Categories</h2>
    <hr class="h-1 bg-red-600">

    <div class="my-5 text-right">
        <a href="{{ route('category.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded ">Add Category</a>
    </div>

    <table class="mt-5 w-full text-center">
        <tr>
            <th class="p-2 bg-gray-200 border border-gray-100">Order</th>
            <th class="p-2 bg-gray-200 border border-gray-100">Category Name</th>
            <th class="p-2 bg-gray-200 border border-gray-100">Action</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td class="p-2 border border-gray-300"> {{$category->priority}} </td>
            <td class="p-2 border border-gray-300">{{$category->categoryname}}</td>
            <td class="p-2 border border-gray-300">
                <a class="px-2 py-1 rounded-lg bg-blue-500 text-white" href="{{route('category.edit',$category->id)}}">Edit</a>
                <a class="px-2 py-1 rounded-lg bg-red-500 text-white" href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
