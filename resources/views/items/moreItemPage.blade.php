@extends('Layout.layout')
@section('title')
<title>Product</title>
@endsection
@section('cnt')
<div class="container w-75">
    <div class="container row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{ $product->image }}" class="img-fluid rounded-top border-bottom">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 desc">
            <div class="container">
                <div class="row">
                    <div>
                        <h2>{{ $product->name }}</h2>
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Category</th>
                                    <td>{{ $cat->name }}</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>{{ $bra->name }}</td>
                                </tr>
                                <tr>
                                    <th>Size</th>
                                    <td>100 90 90 100</td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td>1.01 kg</td>
                                </tr>
                                <tr>
                                    <th>In stoke</th>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container">
                        <div class="row pricer border py-2 rounded">
                            <div class="col">
                                <!-- <a href="#">
                                    <button type="button" class="btn btn-primary btn-lg">
                                    Add To Cart
                                    </button>
                                </a> -->
                                @if($in_cart == false)
                                <form action="{{ route('UpdateCart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="itemId" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn-primary btn-lg col-12">Add To Cart</button>
                                </form>
                                @else
                                <a href="/cart"><button class="btn btn-outline-primary btn-lg col-12">IN CART</button></a>
                                @endif
                            </div>
                            <div class="col mt-1">
                                <h2 class="h2">{{ $product->price }} RUB.</h2>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab">Описание</a>
            </li>
        </ul>
        <div class="container tab-content">
            <div class="tab-pane fade show active fs-4">
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
