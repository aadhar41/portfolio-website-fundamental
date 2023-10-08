@extends('layouts.master')

@section('content')

<div class="col-md-6 mx-auto mt-5">
    <div class="login-container">
        
        @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    &times;
                </button>
                <strong>{{ $error }}</strong>
            </div>
            @endforeach
        @endif
        <h2>Login</h2>
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</div>

@endsection