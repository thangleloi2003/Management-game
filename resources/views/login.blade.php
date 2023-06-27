{{-- @extends('layout.layout')
@section('title', 'Login')
@section('content')
<form action="/login" method="post">
    @csrf
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
    </div>
    @error('message')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL('css/login.css')}}">
    <!-- <link rel="stylesheet" href="login.css"> -->
    <title>Document</title>
</head>
<style>

</style>
<body>
    <form action="/login" method="post">
        @csrf
    <div class="box">
        <div class="form">  
        <h2>Login</h2>
        <div class="inputBox">
            <input type="text" name="email" required="required" id="email" >
            <span>User name</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" name="password" required="required" id="password">
            <span>Password</span>
            <i></i> 
        </div>
        <div class="links">
            <a href="">Forgot password</a>
            <a href="/register">Sign up</a>
        </div>
        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="">
        </div>
        {{-- <input type="submit" value="Login"> --}}
        @error('message')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>
</form>
</body>