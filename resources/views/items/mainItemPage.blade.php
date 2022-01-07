@extends('Layout.layout')
@section('title')
<title>Shop</title>
@endsection
@section('cnt')
<div class="container">
    <div class="row row-cols-auto justify-content-center">
        @foreach($products as $product)
        <div class="card border p-0 m-3" style="width: 18rem;">
            <a href="/product/{{ $product->id }}">
                <div class="scale"><img src="{{ $product->image }}" class="card-img-top" alt="..." width="" height="">
                </div>
            </a>
            <div class="card-body">
                <h5 class="card-title text-end">{{ $product->price }} RUB.</h5>
                <p class="card-text text-center" style="white-space: nowrap; overflow: hidden;">{{ $product->name }}</p>
                @if($_SESSION['cart'] != null and array_key_exists("$product->id", $_SESSION['cart']))
                <a href="/cart"><button class="btn btn-outline-primary w-100">IN CART</button></a>
                @else
                <form action="{{ route('UpdateCart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="itemId" value="{{ $product->id }}">
                    <button type="submit" class="btn btn-primary w-100">Add To Cart</button>
                </form>
                @endif

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection