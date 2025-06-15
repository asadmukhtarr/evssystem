<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\salesController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::middleware('auth')->group(function(){
    // dashboard ..
    Route::get('/dashboard',[pagesController::class,'dashboard'])->name('admin.dashboard');
    // products ...
    Route::prefix('products')->group(function(){
        Route::get('/create',[ProductsController::class,'create'])->name('create.product'); // create ..
        Route::get('/view/{id}',[ProductsController::class,'view'])->name('view.product'); // products ..
        Route::get('/',[ProductsController::class,'products'])->name('all.products'); // all products ..
        Route::get('/product/{id}',[ProductsController::class,'delete'])->name('delete.product'); // delete  product ..
        Route::post('/save',[ProductsController::class,'save'])->name('product.save');
        Route::prefix('categories')->group(function(){
            Route::get('/',[ProductsController::class,'categories'])->name('all.categories'); // all products ..
            Route::post('/save',[ProductsController::class,'save_categories'])->name('save.category'); // for save category ...
            Route::get('/delete/{id}',[ProductsController::class,'delete_category'])->name('delete.category'); // delete category ...
        });
    });
    // stock ..
    Route::get('/sales',[salesController::class,'index'])->name('sales.management');
    Route::get('/search',[salesController::class,'search'])->name('search.management');
    Route::post('/save',[salesController::class,'save'])->name('sale.save');
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