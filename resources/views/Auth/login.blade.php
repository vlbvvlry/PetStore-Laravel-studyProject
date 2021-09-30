@extends('Layout.layout')

@section('title') <title>Log in</title> @endsection

@section('cnt')
<form method="" action="/auth/login">
<div class="container">
    <h1>Log in</h1>
    <hr>
    <label for="login"><b>Login</b></label>
    <input type="text" placeholder="Enter login" name="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <hr>
    <button type="submit" class="loginbtn">Log in</button>
  </div>
</form>
@endsection