<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('product.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('priority')->get();
        return view('product.create',compact('categories'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photopath' => 'required|image',
            'stock' => 'required',
            'status' => 'required',
        ]);

        if($request->hasFile('photopath')){
            $file = $request->photopath;
            $filename = $file->getClientOriginalName();
            $filename = time().'_'.$filename;
            $file->move('images/products',$filename);
            $data['photopath'] = $filename;
        }

        Product::create($data);
        return redirect(route('product.index'));
    }

    public function edit($id){

    }

    public function update(Request $request,$id)
    {

    }

    public function delete($id)
    {

    }
}
