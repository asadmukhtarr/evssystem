@extends('layouts.app')

@section('title','Create New Product')

@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card rouneded-0">
            <div class="card-header bg-danger text-white rounded-0">
                <i class="fa fa-plus-circle"></i> Create New Product
            </div>
            <div class="card-body">
                <form action="{{ route('product.save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="productName" class="form-label">
                            <i class="fa fa-tag"></i> Product Name
                        </label>
                        <input type="text" name="name" class="form-control" id="productName" placeholder="Enter product name" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productDescription" class="form-label">
                            <i class="fa fa-info-circle"></i> Description
                        </label>
                        <textarea name="description" class="form-control" id="productDescription" rows="3" placeholder="Enter product description">{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productPrice" class="form-label">
                            <i class="fa fa-dollar"></i> Price ($)
                        </label>
                        <input type="number" name="price" class="form-control" id="productPrice" placeholder="Enter product price" min="0" value="{{ old('price') }}">
                        @error('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productCategory" class="form-label">
                            <i class="fa fa-list"></i> Category
                        </label>
                        <select name="category_id" class="form-select selectpicker" data-live-search="true" id="productCategory">
                            <option disabled selected>Choose category</option>
                            @foreach($categories as $category)
                                <option 
                                    value="{{ $category->id }}"
                                    data-content="<img src='{{ asset('storage/' . $category->image) }}' width='25' class='me-2'>{{ $category->title }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productImage" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="productImage" name="image">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productStock" class="form-label">Stock Quantity</label>
                        <input type="number" name="stock_quantity" class="form-control" id="productStock" placeholder="Enter stock quantity" min="0" value="{{ old('stock_quantity') }}">
                        @error('stock_quantity')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Save Product
                    </button>                
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
