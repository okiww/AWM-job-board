@extends('layouts.app')
@section('content')
<div class="login-block">
    <img src="{{ asset('themeforest/img/logo.png') }}" alt="">
    <h1>Log into your account</h1>

    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
        @csrf
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="ti-email"></i></span>
                <!-- <input type="text" class="form-control" placeholder="Email"> -->
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        
        <hr class="hr-xs">
        <button class="btn btn-primary btn-block" type="submit">{{ __('Send Password Reset Link') }}</button>
        </div>

    </form>
</div>
@endsection
