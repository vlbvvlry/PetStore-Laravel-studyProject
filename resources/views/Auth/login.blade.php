@extends('Layout.layout')

@section('title') <title>Sign in</title> @endsection

@section('cnt')
<div class="container text-center">
<h1>Sign in</h1>
<br>
<br>
<form method="POST" action=" {{ route('customer.login') }} ">
  @csrf
    <div class="container text-center">
        <div class="container input-group-md form-group mb-3 w-25">
            <input type="text" class="form-control" name="email" placeholder="Enter email..">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="container input-group-md form-group mb-5 w-25">
            <input type="password" class="form-control" name="password" placeholder="Enter password..">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="container">
            <button type="submit" class="btn-md btn-primary w-25">LOG IN</button>
        </div>
    </div>
</form>
</div>
@endsection