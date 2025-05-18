@extends('layout')

@section('title','Login Page')

@section('main')
<div class="main">
    <h1>User Login</h1>
    <form action="" method="get">
        <input type="text" placeholder="enter name"> <br> <br>
        <input type="password" placeholder="enter password"> <br> <br>
        <button type="button" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
    
