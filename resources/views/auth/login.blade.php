@extends('layouts.admin.master')
@section('content')
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <center>
            <img src="{{asset('admin-authen/images/logo.2.jpg')}}">
            </center>
            <span class="login100-form-title p-b-34 p-t-15">
            <h3>Log in</h3>
            </span>
            <div class="form-group first"data-validate = "Enter username">
                <label for="username"><h5>Email</h5></label>
                <input type="email" name="email" class="form-control" placeholder="your-email@gmail.com" id="username">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>
            <div class="form-group last mb-3">
            <label for="password"><h5>Password</h5></label>
            <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>
            
            <div class="d-flex mb-10 align-items-center">
                <span class="ml-auto"><a href="{{ url('/') }}" class="text">go to home</a></span> 
            </div>

                <div class="d-flex mb-10 align-items-center">
                    <span class="ml-auto"><a href="{{ route('register') }}" class="text">go to register</a></span> 
                </div>

            <div class="d-flex mb-5 align-items-center">
                <!-- <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                </label> -->
                 <span class="ml-auto"><a href="{{ route('password.request') }}" class="text">Forgot Password</a></span> 
            </div>

            <input type="submit" value="Log In" class="btn btn-block btn-primary">

        </form>
@endsection
