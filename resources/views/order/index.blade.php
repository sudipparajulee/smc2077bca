@extends('layouts.app')
@section('content')
<h1 class="font-bold text-3xl text-blue-800">Orders</h1>
<hr class="h-1 bg-red-500">

<table class="w-full">
    <tr>
        <th class="border p-2">S.N.</th>
        <th class="border p-2">Product Picture</th>
        <th class="border p-2">Product Name</th>
        <th class="border p-2">Customer Name</th>
        <th class="border p-2">Customer Email</th>
        <th class="border p-2">Price</th>
        <th class="border p-2">Quantity</th>
        <th class="border p-2">Total</th>
        <th class="border p-2">Action</th>
    </tr>
    @foreach($orders as $order)
        <td class="border p-2">{{$loop->iteration}}</td>
        <td class="border p-2">Picture</td>
        <td class="border p-2">Product Name</td>
        <td class="border p-2">Customer Name</td>
        <td class="border p-2">Customer Email</td>
        <td class="border p-2">Price</td>
        <td class="border p-2">Quantity</td>
        <td class="border p-2">Total</td>
        <td class="border p-2">Processing Delivered</td>
    @endforeach
</table>
@endsection
