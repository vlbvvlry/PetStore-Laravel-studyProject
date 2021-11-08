@extends('Layout.layout')
@section('title')
<title>Product</title>
@endsection
@section('cnt')
<div class="container">
    <div class="container row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{ $product->image }}" class="img-fluid rounded">
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
                    <div class="mb-3">
                        <h1 class="h1">{{ $product->price }} rub.</h1>
                    </div>
                    <div class="">
                        <a href="#" class=""><button type="button" class="btn btn-primary btn-lg">
                                <svg width="1em" height="1em" viewBox="1 1 18 18" class="bi bi-basket-fill"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
                                </svg>
                                Add To Cart
                            </button></a>
                        <a href=""><button type="radio" class="btn btn-lg pt-0">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </button></a>
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