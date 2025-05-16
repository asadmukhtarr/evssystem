<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class ProductsController extends Controller
{
    // for create ..
    public function create(){
        $categories = category::all();
        return view('Products.create',compact('categories'));
    }
    // products ..
    public function products(){
        return view('Products.Products');
    }
    // for save product ..
    public function save(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|max:2048',
            'stock_quantity' => 'required|integer|min:0',
        ]);
        return $request;
    }
    // categories ...
    public function categories(){
        $categories = category::latest()->get();
        return view('Products.Categories',compact('categories'));
    }
    // for save categories ..
    public function save_categories(Request $request){
        $validated  = $request->validate([
            'title' => 'required|min:6',
            'image' => 'required'
        ]);
        $imgAddress = "asad".time() . "." . $request->image->getClientOriginalExtension();
        $request->image->storeAs('categories',$imgAddress,'public');
        $category  = new category;
        $category->title = $request->title;
        $category->image = "categories/".$imgAddress;
        $category->save();
        return redirect()->back()->with('success','Category Saved Succesfully');
    }
    public function delete_category($id){
        $category = category::find($id);
        $category->delete();
        return redirect()->back()->with('warning','Category Deleted Succesfully');
    }
}
