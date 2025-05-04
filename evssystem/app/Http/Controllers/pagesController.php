<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function dashboard(){
        return view('dashboard');
    }
    public function stock(){
        return view('stock.sales');
    }
    // users ..
    public function users(){
        return view('users.user');
    }
}
