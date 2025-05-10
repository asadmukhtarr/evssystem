<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class ProductsController extends Controller
{
    // for create ..
    public function create(){
        return view('Products.create');
    }
    // products ..
    public function products(){
        return view('Products.Products');
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
}
