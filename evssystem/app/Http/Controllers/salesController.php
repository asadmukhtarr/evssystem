<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\sale;

class salesController extends Controller
{
    // 
    public function index(){
        $products = product::all();
        $sales = sale::orderby('id','desc')->get();
        return view('stock.sales',compact('products','sales'));
    }
    public function search(Request $request){
        if(!empty($request->search)){
            $sales = Sale::where('name', 'like', '%' . $request->search . '%')->get();
        } else {
            $sales = Sale::orderby('id','desc')->get();
        }
        $products = product::all();
        return view('stock.sales',compact('products','sales'));
    }
    public function save(Request $request){
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'customer_name' => 'required|string|max:255',
        ]);
        // for update product quantity ..
        $product = product::find($request->product_id);
        $q = $product->stock_quantity - $request->quantity;
        $product->stock_quantity = $q;
        $product->save();
        // for total ..
        $total = $product->price * $request->quantity;
        $sale = new sale;
        $sale->name = $request->customer_name;
        $sale->product_id = $product->id;
        $sale->quantity = $request->quantity;
        $sale->total = $total;
        $sale->save();
        return redirect()->back()->with('success','Sale Created Succesfully');
    }
}