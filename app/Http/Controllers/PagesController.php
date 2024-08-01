<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $products = Product::latest()->limit(4)->get();
        return view('welcome',compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function viewproduct($id)
    {
        $product = Product::find($id);
        return view('viewproduct',compact('product'));
    }

    public function categoryproduct($catid)
    {
        $category = Category::find($catid);
        $products = Product::where('category_id',$catid)->get();
        return view('categoryproduct',compact('products','category'));
    }
}
