@extends('Layout.layout')
@section('tilte')
<title>Product</title>
@endsection
@section('cnt')
<div class="container">
    <h1>Details of product "{{ $product->name }}" here.</h1>
    <br>
    <p>{{ $product->description }}</p>
</div>
@endsection