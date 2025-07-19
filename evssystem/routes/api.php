<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\product;
use App\Models\category;

// products ..
Route::get('/products',function(){
    $products = product::all();
    return response()->json($products);
}); 
// single product ..
Route::get('/product/{id}',function($id){
    $product = product::find($id);
    return response()->json($product);
});
// categories ...
Route::get('/categories',function(){
    $categories = category::all();
    return response()->json($categories);
});
// single category ..
Route::get('/category/{id}',function($id){
    $category = category::find($id);
    return response()->json($category);
});