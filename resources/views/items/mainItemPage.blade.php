@extends('Layout.layout')
@section('title')
<title>Shop</title>
@endsection
@section('cnt')
<div class="container text-center">
    <h1 class="h1">ITEMSPAGE</h1>
    
    <div class="container">
        @foreach($products as $product)
        <a href="/product/{{ $product->id }}"><h2>{{ $product->name }}</h2></a>
        <p>{{ $product->price }} rub.</p>
        <a href="">AddCart</a>
        <br>
        <br>
        @endforeach
    </div>
    
</div>
@endsection