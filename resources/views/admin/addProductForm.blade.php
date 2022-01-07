@extends('Layout.layout')
@section('title')
<title>New Product</title>
@endsection
@section('cnt')
<div class="d-md-flex d-sm-flex justify-content-center">
    <div class="col-md-4 col-sm-6 col-xs-12 mt-0">
        <form class="mt-5" method="POST" action="{{ route('admin.add') }}">
            @csrf
            <h1 class="h1 text-center mb-3">
                NEW PRODUCT</h1>
            <input class="form-control mb-3" type="text" placeholder="image" name="image">
            <input class="form-control mb-3" type="text" placeholder="name" name="name">
            <input class="form-control mb-3" type="text" placeholder="price" name="price">
            <input class="form-control mb-3" type="text" placeholder="description" name="description">
            <div class="row mx-1 mb-3">
                <div class="col p-0 mx-1">
                    <select class="form-select" aria-label="Default select example" name="brand_id">
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col p-0 mx-1">
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button class="btn btn-primary w-100" type="submit">Add</button>
        </form>
    </div>
</div>
@endsection