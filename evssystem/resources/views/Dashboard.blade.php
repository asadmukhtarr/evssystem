@extends('layouts.app')
@section('title','Dashboard')
@section('content')
@if(Auth::check())
    <h2> Welcome {{ Auth::user()->name }} ! </h2>
    <p>You Are Logged In ..</p>
    <div class="row">
    <!-- Users Box -->
    <div class="col-md-3">
        <div class="card text-white bg-primary mb-3 shadow">
            <div class="card-body text-center">
                <i class="fa fa-users fa-2x"></i>
                <h5 class="card-title mt-2">Users</h5>
                <p class="card-text">1,234</p>
            </div>
        </div>
    </div>

    <!-- Products Box -->
    <div class="col-md-3">
        <div class="card text-white bg-success mb-3 shadow">
            <div class="card-body text-center">
                <i class="fa fa-product-hunt fa-2x"></i>
                <h5 class="card-title mt-2">Products</h5>
                <p class="card-text">567</p>
            </div>
        </div>
    </div>

    <!-- Categories Box -->
    <div class="col-md-3">
        <div class="card text-white bg-warning mb-3 shadow">
            <div class="card-body text-center">
                <i class="fa fa-tags fa-2x"></i>
                <h5 class="card-title mt-2">Categories</h5>
                <p class="card-text">{{ App\Models\category::all()->count() }}</p>
            </div>
        </div>
    </div>

    <!-- Stock Box -->
    <div class="col-md-3">
        <div class="card text-white bg-danger mb-3 shadow">
            <div class="card-body text-center">
                <i class="fa fa-cubes fa-2x"></i>
                <h5 class="card-title mt-2">Stock</h5>
                <p class="card-text">980 Items</p>
            </div>
        </div>
    </div>
</div>

@else 
    <h2>Please Login First</h2>
@endif
@endsection