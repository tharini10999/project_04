@extends('layouts.admin.master')
@section('content')
        <form  method="POST" action="{{ route('register') }}">
            @csrf
            <center>
            <img src="{{asset('admin-authen/images/logo.2.jpg')}}">
            </center>
            <span class="login100-form-title p-b-34 p-t-15">
            <h3>Register</h3>
            </span>
            <div class="form-group first"data-validate = "Enter name">
                <label for="name"><h5>Name</h5></label>
                <input type="text" name="name" class="form-control" placeholder="your-email@gmail.com" id="name">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            <div class="form-group first"data-validate = "Enter email">
                <label for="email"><h5>email</h5></label>
                <input type="text" name="email" class="form-control" placeholder="your-email@gmail.com" id="email">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            
            <div class="form-group last mb-3">
                <label for="password"><h5>Password</h5></label>
                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            <div class="form-group last mb-3">
                <label for="Confirm Password"><h5>Confirm Password</h5></label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" id="Confirm Password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>
            
            <div class="d-flex mb-10 align-items-center">
                <span class="ml-auto"><a href="{{ url('/') }}" class="text">go to home</a></span> 
            </div>

                <div class="d-flex mb-10 align-items-center">
                    <span class="ml-auto"><a href="{{ route('login') }}" class="text">go tolog in</a></span> 
                </div>

            <div class="d-flex mb-5 align-items-center">
                <!-- <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                </label> -->
                 <span class="ml-auto"><a href="{{ route('password.request') }}" class="text">Forgot Password</a></span> 
            </div>

            <input type="submit" value="Register" class="btn btn-block btn-primary">

        </form>
@endsection
