@extends('backend.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/backend/login.css') }}">
@endsection

@section('content')
    <div class="center">
        <h1>Login</h1>
        <form action="">
            <div class="txt-field">
                <input type="email" name="" required>
                <label>Username</label>
            </div>

            <div class="txt-field">
                <input type="password" name="" required>
                <label>Password</label>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
@endsection
