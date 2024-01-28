@extends('layouts.app')
@section('content')
    <h2 class="font-bold text-3xl text-blue-800">Dashboard</h2>
    <hr class="h-1 bg-red-600">

    <div class="grid grid-cols-3 gap-10 mt-10">
        <div class="bg-blue-600 py-5 px-4 flex justify-between text-white rounded-lg shadow">
            <p class="text-xl">Total Products</p>
            <h2 class="text-5xl font-bold">254</h2>
        </div>

        <div class="bg-red-600 py-5 px-4 flex justify-between text-white rounded-lg shadow">
            <p class="text-xl">New Orders</p>
            <h2 class="text-5xl font-bold">56</h2>
        </div>

        <div class="bg-green-600 py-5 px-4 flex justify-between text-white rounded-lg shadow">
            <p class="text-xl">Total Revenue</p>
            <h2 class="text-5xl font-bold">250564</h2>
        </div>
    </div>
@endsection
