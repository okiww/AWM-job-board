@extends('layouts.app')

@section('content')
<div class="login-block">
        <img src="{{ asset('themeforest/img/logo.png') }}" alt="">
        <h1>Log into your account</h1>

        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
             @csrf

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="ti-email"></i></span>
                    <!-- <input type="text" class="form-control" placeholder="Email"> -->
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                    <!-- <input type="password" class="form-control" placeholder="Password"> -->
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}</button>

            <div class="login-footer">
            <h6>Or login with</h6>
            <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            </div>

        </form>
    </div>

    <div class="login-links">
        <a class="pull-left" href="user-forget-pass.html">Forget Password?</a>
        <a class="pull-right" href="user-register.html">Register an account</a>
    </div>
@endsection

    
