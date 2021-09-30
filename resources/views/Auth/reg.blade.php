@extends('Layout.layout')

@section('title') <title>Reg</title> @endsection

@section('cnt')
<form>
  <div class="container">
    <h1>Register</h1>
    <hr>

    <label for="login"><b>Login</b></label>
    <input type="text" placeholder="Enter login" name="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>
@endsection