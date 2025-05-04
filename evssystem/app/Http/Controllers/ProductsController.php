<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Products.Categories');
    }
}
