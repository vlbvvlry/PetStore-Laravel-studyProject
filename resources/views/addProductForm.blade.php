@extends('Layout.layout')

@section('title')
<title>Add</title>
@endsection

@section('cnt')
<div class="container text-center">
    <form method="POST" action="{{ route('add') }}">
        @csrf
        <div class="container text-center" style="border: 3px solid;">
            <input name="image" class="form-control mb-2 w-25" type="text" placeholder="image">
            <input name="name" class="form-control mb-2 w-25" type="text" placeholder="name">
            <input name="price" class="form-control mb-2 w-25" type="text" placeholder="price">
            <textarea name="description" id="" cols="30" rows="2" placeholder="description"></textarea>
            <select name="category_id" id="">
                <!-- <option value="1">Cat1</option>
                <option value="2">Cat2</option> -->
                @foreach($cats as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            <select name="brand_id" id="">
                <!-- <option value="1">Company1</option>
                <option value="2">Company2</option> -->
                @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            <button type="submit">Add</button>
        </div>
    </form>
</div>
@endsection