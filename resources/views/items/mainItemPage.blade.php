@extends('Layout.layout')
@section('title')
<title>Shop</title>
@endsection
@section('cnt')
<div class="container">
    <!-- <h1 class="h1">ITEMSPAGE</h1>
    
    <div class="container">
        @foreach($products as $product)
        <a href="/product/{{ $product->id }}"><h2>{{ $product->name }}</h2></a>
        <p>{{ $product->price }} rub.</p>
        <a href="">AddCart</a>
        <br>
        <br>
        @endforeach
    </div> -->

    
    <div class="row row-cols-3">
    @foreach($products as $product)    
            <div class="card border mb-3 mr-3" style="width: 20rem;">
                <a href="/product/{{ $product->id }}"><img src="{{ $product->image }}" class="card-img-top"
                    alt="..." width="" height=""></a>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->price }} RUB.</h5>
                    <p class="card-text" style="white-space: nowrap; overflow: hidden;">{{ $product->name }}</p>
                    <a href="/product/{{ $product->id }}" class="btn btn-primary">Add To Cart</a>
                </div>
            </div>      
    @endforeach
    </div>
    


</div>
@endsection