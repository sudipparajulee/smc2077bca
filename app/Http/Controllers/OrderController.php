<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = Cart::find($request->input('cart_id'));
        $data['product_id'] = $cart->product_id;
        $data['quantity'] = $cart->quantity;
        $data['price'] = $cart->product->price;
        $data['user_id'] = auth()->id();
        $data['order_date'] = date('Y-m-d');
        $data['status'] = 'Pending';
        Order::create($data);
        $cart->delete();
        return redirect('/cart')->with('success', 'Order placed successfully');

    }


    public function index()
    {
        $orders = Order::all();
        return view('order.index',compact('orders'));
    }
}
