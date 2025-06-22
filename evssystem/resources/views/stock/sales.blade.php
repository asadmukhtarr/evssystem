@extends('layouts.app')
@section('title','Stock')
@section('content')
<div class="card">
    <div class="card-header bg-danger text-white">
        <i class="fa fa-plus-circle"></i> New Sale
    </div>

    <form action="{{ route('sale.save') }}" method="post">
        @csrf
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th><i class="fa fa-cube"></i> Product</th>
                    <th><i class="fa fa-sort-numeric-asc"></i> Quantity</th>
                    <th><i class="fa fa-user"></i> Customer Name</th>
                    <th><i class="fa fa-cogs"></i> Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="product_id" class="form-control" required>
                            <option value="">Select Product</option>
                            @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        @error('product_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </td>
                    <td>
                        <input type="number" name="quantity" class="form-control" required>
                        @error('quantity')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </td>
                    <td>
                        <input type="text" name="customer_name" class="form-control" required>
                        @error('customer_name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div class="card mt-2">
    <div class="card-header bg-danger text-white">
        <i class="fa fa-line-chart"></i> Sales Management
        <span class="float-end"> Total Sale: {{ $sales->sum('total') }} Pkr</span>
    </div>
    <div class="card-body">
        <form action="{{ route('search.management') }}" method="get">
            <input type="text" class="form-control" name="search" placeholder="Search By Customer" />
            <button type="submit" class="btn btn-danger btn-sm mt-2">
                <i class="fa fa-search"></i> Search
            </button>
        </form>
    </div>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th><i class="fa fa-hashtag"></i></th>
            <th><i class="fa fa-user"></i> Customer Name</th>
            <th><i class="fa fa-cube"></i> Product</th>
            <th><i class="fa fa-sort-numeric-asc"></i> Quantity</th>
            <th><i class="fa fa-money"></i> Total</th>
        </tr>
        @if($sales->count() > 0)
        @foreach($sales as $sale)
        <tr>
            <td>{{ $sale->id }}</td>
            <td> {{ $sale->name }}</td>
            <td>{{ $sale->product->name ?? 'N/A' }} <span class="text-danger">{{ $sale->product->stock_quantity ??
                'N/A' }}
                </span></td>
            <td>{{ $sale->quantity }}</td>
            <td>{{ $sale->total }} Pkr </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">
                No Sale Found
            </td>
        </tr>
        @endif
    </table>
</div>
@endsection