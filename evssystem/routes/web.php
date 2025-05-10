<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::middleware('auth')->group(function(){
    // dashboard ..
    Route::get('/dashboard',[pagesController::class,'dashboard'])->name('admin.dashboard');
    // products ...
    Route::prefix('products')->group(function(){
        Route::get('/create',[ProductsController::class,'create'])->name('create.product'); // create ..
        Route::get('/',[ProductsController::class,'products'])->name('all.products'); // all products ..
        Route::get('/categories',[ProductsController::class,'categories'])->name('all.categories'); // all products ..
        Route::post('/save/categories',[ProductsController::class,'save_categories'])->name('save.category');
    });
    // stock ..
    Route::get('/stock',[pagesController::class,'stock'])->name('stock.management');
    // users route ..
    Route::prefix('users')->group(function(){
        Route::get('/',[pagesController::class,'users'])->name('users');
    });

});

// 404 ..
Route::get('*',function(){
    abort(404);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
