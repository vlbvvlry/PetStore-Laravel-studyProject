@extends('Layout.layout')

@section('title') <title>Sign up</title> @endsection

@section('cnt')
<div class="container text-center">
    <h1>Sign up</h1>
    <br>
    <form method="POST" action="{{ route('customer.registration') }}">
        @csrf
        <div class="container">
            <div class="container col-4 input-group-md mb-5 w-25">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="container input-group-md mb-5 w-25">
                <input class="form-control mb-3" type="text" name="email" placeholder="Enter your email..">
                <input class="form-control mb-3" type="password" name="password" placeholder="Enter your password..">
                <input class="form-control" type="password" placeholder="Repeat password please..">
            </div>
            <div class="container">
                <button type="submit" class="btn-md btn-primary w-25">REGISTER</button>
            </div>
        </div>
    </form>
</div>
@endsection