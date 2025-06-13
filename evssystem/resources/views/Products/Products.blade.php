@extends('layouts.app')
@section('title','All Products')
@section('content')
<div class="card rounded-0">
    <div class="card-header rounded-0">
        <i class="fa fa-list"></i> All Products
    </div>
    <table class="table table-bordered table-stripped table-hover">
            <tr>
                <th><i class="fa fa-hashtag"></i> Sr #</th>
                <th><i class="fa fa-tag"></i> Title</th>
                <th><i class="fa fa-money"></i> Price</th>
                <th><i class="fa fa-list"></i> Category </th>
                <th><i class="fa fa-cubes"></i> Quantity</th>
                <th><i class="fa fa-cogs"></i> Actions</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td> <img src="{{ asset('storage') }}/{{ $product->image }}" height="30px" alt="">  {{ $product->name }}</td>
                <td>{{ round($product->price) }} Pkr</td>
                <th> <img src="{{ asset('storage') }}/{{ $product->category->image }}" height="30px" alt=""> {{ $product->category->title }} </th>
                <td>{{ $product->stock_quantity }}</td>
                <td>
                    <a href="{{ route('delete.product',$product->id) }}">
                    <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </button>
                    </a>
                    <button class="btn btn-success btn-sm m-1">
                        <i class="fa fa-edit"></i>
                    </button>
                    <a href="{{ route('view.product',$product->id) }}">
                     <button class="btn btn-info btn-sm ">
                        <i class="fa fa-eye"></i>
                    </button>
                    </a>
                </td>
            </tr>
            @endforeach
    </table>
</div>
@endsection