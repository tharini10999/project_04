@extends('layouts.admin.master')
@section('content')
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <center>
            <img src="{{asset('admin-authen/images/logo.2.jpg')}}">
            </center>
            <span class="login100-form-title p-b-34 p-t-15">
            <h3>Reset Password</h3>
            </span>
            

            <div class="form-group first"data-validate = "Enter email">
                <label for="email"><h5>email</h5></label>
                <input type="text" name="email"value="{{ $email ?? old('email') }}" class="form-control" placeholder="your-email@gmail.com" id="email">
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
            
            
            <input type="submit" value="Reset Password" class="btn btn-block btn-primary">

        </form>
@endsection
