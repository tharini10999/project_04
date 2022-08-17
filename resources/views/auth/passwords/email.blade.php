@extends('layouts.admin.master')
@section('content')
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <center>
            <img src="{{asset('admin-authen/images/logo.2.jpg')}}">
            </center>
            <span class="login100-form-title p-b-34 p-t-15">
            <h3>Reset Password</h3>
            </span>
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="form-group first"data-validate = "Enter username">
                <label for="username"><h5>Email</h5></label>
                <input type="email" name="email" class="form-control" placeholder="your-email@gmail.com" id="username">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>
            <input type="submit" value="Send Password Reset Link" class="btn btn-block btn-primary">

        </form>
@endsection
