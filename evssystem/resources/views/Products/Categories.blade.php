@extends('layouts.app')
@section('title','Categories')
@section('content')
<div class="row">
    <div class="col-lg-3">
        <form action="{{ route('save.category') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card rounded-0">
                <div class="card-header bg-danger text-white rounded-0">
                    <i class="fa fa-plus-circle"></i> Create Categories
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> <i class="fa fa-tags"></i> Title </label>
                        <input type="text" class="form-control" name="title">
                        @error('title')
                        <font color="red" size="1"><b>{{ $message }}</b></font>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for=""> <i class="fa fa-file"></i> Upload Image </label>
                        <input type="file" class="form-control" name="image">
                         @error('image')
                        <font color="red" size="1"><b>{{ $message }}</b></font>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger btn-sm float-end">
                        <i class="fa fa-save"></i> Create Category
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-8">
        <div class="card rounded-0">
            <div class="card-header bg-danger rounded-0 text-white">
                <i class="fa fa-list"></i> All Categries
            </div>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th><i class="fa fa-sort-numeric-asc"></i> Sr #</th>
                    <th><i class="fa fa-file-text"></i> Title</th>
                    <th> <i class="fa fa-list"></i> Products</th>
                    <th><i class="fa fa-cogs"></i> Action</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td> <img src="{{ asset('storage') }}/{{ $category->image }}" height="30px" alt=""> {{ $category->title }}</td>
                    <td>
                        {{ $category->products->count() }}
                    </td>
                    <td>
                        <a href="{{ route('delete.category',$category->id) }}">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection