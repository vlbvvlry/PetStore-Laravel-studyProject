@extends('Layout.layout')
@section('title')
<title>Cart</title>
@endsection
@section('cnt')
<!-- <div class="container text-center">
    <h1>Your cart: </h1>
    @if($IDs != null)
    @foreach($IDs as $id)
        <p>{{ $products->find($id)->name }} - {{ $counts[$id] }} count  <b>{{ $products->find($id)->price }} руб.</b></p>
    @endforeach
    @else
        <p>Cart empty</p>
    @endif
    <button>Buy</button>
</div> -->

<div class="mt-50 text-center">
    <div class="container-fluid col-md-5 col-sm-12 col-xs-12 mt-5">
        <h1 class="h1 text-center mb-3">
            CART</h1>

        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Count</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            @if($IDs != null)
            <tbody>
                @foreach($IDs as $id)
                <tr>
                    <td><a href="/product/{{ $id }}" class="text-dark mt-5">{{ $products->find($id)->name }}</a><a href="/cart/delete/{{ $id }}" class="delete">
                    </td>
                    <td>{{ $counts[$id] }}</td>
                    <td>{{ $products->find($id)->price }} RUB</td>
                </tr>
                @endforeach
            </tbody>
            @else
            <td colspan="3">
                CART EMPTY..
            </td>
            @endif
        </table>
        <div class="py-2">
        @if($IDs != null)
            <a href="/cartclear"><button class="btn btn-outline-danger col-5">Clear</button></a>
            <button class="btn btn-primary col-5">BUY</button>
        @else
            <button class="btn btn-outline-danger col-5" disabled>Clear</button>
            <button class="btn btn-success col-5" disabled>BUY</button>
        @endif

        </div>
    </div>
</div>


@endsection