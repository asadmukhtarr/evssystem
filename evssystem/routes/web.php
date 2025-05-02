<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

Route::get('/', function () {
    return view('welcome');
});
// dashboard ..
Route::get('/dashboard',[pagesController::class,'dashboard'])->name('admin.dashboard');
//  products ...
Route::get('/products/create',function(){
    return view('Products.create');
});

Route::get('*',function(){
    abort(404);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
