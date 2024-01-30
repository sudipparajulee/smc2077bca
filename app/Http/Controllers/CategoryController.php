<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        $categories = Category::orderBy('priority','asc')->get();
        return view('category.index',compact('categories'));
    }


    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request){
        // $category = new Category();
        // $category->categoryname = $request->categoryname;
        // $category->priority = $request->priority;
        // $category->save();

        // Category::create([
        //     'categoryname' => $request->categoryname,
        //     'priority' => $request->priority,
        // ]);

        $data = $request->validate([
            'categoryname' => 'required',
            'priority' => 'required|numeric',
        ]);

        Category::create($data);

        return redirect(route('category.index'))->with('success','Category Added Successfully');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('category.edit',compact('category'));
    }

    // github.com/sudipparajulee

    public function update(Request $request,$id)
    {
        $data = $request->validate([
            'categoryname' => 'required',
            'priority' => 'required|numeric',
        ]);

        $category = Category::findOrFail($id);
        $category->update($data);
        return redirect(route('category.index'))->with('success','Category Updated Successfully');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('category.index'))->with('success','Category Deleted Successfully');
    }
}
