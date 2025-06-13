@extends('layouts.app')

@section('title','Product')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <div class="card shadow rounded-3 p-3">
                <img src="{{ asset('storage/' . $product->image) }}" height="250px" alt="{{ $product->title }}">
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card shadow rounded-3">
                <div class="card-body">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <h5 class="text-muted">Price: <strong>{{ $product->price }} Pkr</strong></h5>
                    <p class="mb-2">Category: <span class="badge bg-primary">{{ $product->category->title }}</span></p>
                    <p class="mb-2">Quantity: <span class="badge bg-success">{{ $product->stock_quantity }}</span></p>
                    <p class="card-text mt-3">
                        <strong>Description:</strong><br>
                        {{ $product->description }}
                    </p>
                    <a href="{{ route('all.products') }}" class="btn btn-secondary mt-3">
                        <i class="fa fa-arrow-left"></i> Back to Products
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
