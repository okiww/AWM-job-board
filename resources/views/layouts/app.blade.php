<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('themeforest/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themeforest/css/thejobs.css') }}" rel="stylesheet">
    <link href="{{ asset('themeforest/css/custom.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="{{ asset('themeforest/img/favicon.ico') }}">
</head>
@if (Route::currentRouteName() === "login" || Route::currentRouteName() === "register" || Route::currentRouteName() === "password.request" || Route::currentRouteName() === "password.reset")
    <body class="login-page">
@else
    <body class="nav-on-header smart-nav">
@endif
        <div id="app">
            <!-- Navigation bar -->
            @if (Route::currentRouteName() !== "login" && Route::currentRouteName() !== "register" && Route::currentRouteName() !== 'password.request' && Route::currentRouteName() !== "password.reset")
                @include('layouts.nav')
            @endif
            <!-- Header -->
            @if (Route::currentRouteName() !== "login" && Route::currentRouteName() !== "register" && Route::currentRouteName() !== 'password.request' && Route::currentRouteName() !== "password.reset")
                @include('layouts.header')
            @endif
            <!-- Main container -->
            <main>
                @yield('content')
            </main>
            <!-- END Main container -->


            <!-- Site footer -->
            @if (Route::currentRouteName() !== "login" && Route::currentRouteName() !== "register" && Route::currentRouteName() !== 'password.request' && Route::currentRouteName() !== "password.reset")
                @include('layouts.footer')
            @endif
            <!-- END Site footer -->


            <!-- Back to top button -->
            @if (Route::currentRouteName() !== "login" && Route::currentRouteName() !== "register" && Route::currentRouteName() !== 'password.request' && Route::currentRouteName() !== "password.reset")
                <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
            @endif
            <!-- END Back to top button -->
        </div>
        <!-- Scripts -->
        <script src="{{ asset('themeforest/js/app.min.js') }}"></script>
        <script src="{{ asset('themeforest/js/thejobs.js') }}"></script>
        <script src="{{ asset('themeforest/js/custom.js') }}"></script>
    </body>
</html>
