<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class ProductsController extends Controller
{
    // for create ..
    public function create(){
        $categories = category::all();
        return view('Products.create',compact('categories'));
    }
    // products ..
    public function products(){
        $products = product::all();
        return view('Products.Products',compact('products'));
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
        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imgAddress = "asad".time() . "." . $request->image->getClientOriginalExtension();
            $request->image->storeAs('products',$imgAddress,'public');
        }

        // Insert using object notation
        $product = new product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = "products/".$imgAddress;
        $product->stock_quantity = $request->stock_quantity;
        $product->save();

        return redirect()->back()->with('message','Product Created Succesfully');
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
    public function view($id){
        $product = product::with('category')->findorFail($id);
        return view('products.product',compact('product'));
    }
    public function delete($id){
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('warning','Product Deleted Succesfully');
    }
}
