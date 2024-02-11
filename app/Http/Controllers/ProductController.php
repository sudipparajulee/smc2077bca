<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $product = Product::find($id);
        $categories = Category::orderBy('priority')->get();
        return view('product.edit',compact('product','categories'));
    }

    public function update(Request $request,$id)
    {
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photopath' => 'nullable',
            'stock' => 'required',
            'status' => 'required',
        ]);

        $product = Product::find($id);

        if($request->hasFile('photopath')){
            $file = $request->photopath;
            $filename = $file->getClientOriginalName();
            $filename = time().'_'.$filename;
            $file->move('images/products',$filename);
            File::delete(public_path('images/products/'.$product->photopath));
            $data['photopath'] = $filename;
        }

        $product->update($data);
        return redirect(route('product.index'));
    }

    public function delete($id)
    {
        $product = Product::find($id);
        File::delete(public_path('images/products/'.$product->photopath));
        $product->delete();
        return redirect(route('product.index'));
    }
}
