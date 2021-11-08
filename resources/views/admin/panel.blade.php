@extends('Layout.layout')
@section('title')
<title>Admin Panel</title>
@endsection
@section('cnt')
<div class="container text-center">
    <h1 class="h1 mb-5">Admin Panel</h1>
    <a href="/admin/add"><button class="btn btn-lg btn-primary">Add New Product</button></a>
</div>
@endsection