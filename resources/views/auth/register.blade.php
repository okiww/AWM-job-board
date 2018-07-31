@extends('layouts.app')

@section('content')
<div class="login-block">
    <img src="{{ asset('themeforest/img/logo.png') }}" alt="">
    <h1>Log into your account</h1>

    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Login') }}">
    @csrf

        <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="ti-user"></i></span>
            <!-- <input type="text" class="form-control" placeholder="Your name"> -->
            <input id="name" type="text" placeholder="Your name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        </div>
        
        <hr class="hr-xs">

        <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="ti-email"></i></span>
            <input id="email" type="email" placeholder="Your email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        </div>
        
        <hr class="hr-xs">

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="ti-unlock"></i></span>
                <input id="password" placeholder="Choose a password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="ti-unlock"></i></span>
                <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" name="password_confirmation" required>              
            </div>
        </div>

        <button class="btn btn-primary btn-block" type="submit">Sign up</button>

        <div class="login-footer">
        <h6>Or register with</h6>
        <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        </div>

    </form>
</div>

<div class="login-links">
    <p class="text-center">Already have an account? <a class="txt-brand" href="{{ route('register') }}">Login</a></p>
</div>
@endsection



