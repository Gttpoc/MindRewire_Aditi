@extends('layouts.authentication')

@section('body-id', 'loginBg')

@section('favicon')
    <link rel="apple-touch-icon" sizes="57x57"
        href="{{ version_url('mainsite/assets/images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60"
        href="{{ version_url('mainsite/assets/images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ version_url('mainsite/assets/images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ version_url('mainsite/assets/images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ version_url('mainsite/assets/images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ version_url('mainsite/assets/images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ version_url('mainsite/assets/images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ version_url('mainsite/assets/images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ version_url('mainsite/assets/images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ version_url('mainsite/assets/images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ version_url('mainsite/assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ version_url('mainsite/assets/images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ version_url('mainsite/assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ version_url('mainsite/assets/images/favicon/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ version_url('mainsite/assets/images/favicon/ms-icon-144x144.png') }}">
@stop

@section('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator Login</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <link rel="icon" href="{{ url('assets/images/favicon.png') }}" type="image/x-icon">
@stop

@section('css')
    <link href="{{ version_url('assets/admin/css/login.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet" />
@stop

@section('content')
    <div class="login-main">
        <a href="javascript:void(0)" class="login_logo">
            <img style="height: 50px" src="{{ version_url('assets/images/common-images/logo_mind_sm.png') }}"
                alt="Logo">
        </a>
        <div class="login-inner">
            <div class="row flex-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <h1 class="heading inverse">Welcome to Mind Rewire Admin
                            Administration</h1>
                        {{-- <h3 class="inverse opacity-5">Manage Services with Ease</h4> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form">
                        <form id="Login" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4 class="subheading">Login to your account</h4>
                            <p class="text-gray">to manage your services with ease.</p>
                            <div class="form-group form-group-with-icon animated">
                                <input name="email" type="text" id="emailID" class="form-control" required="">
                                <label class="form-control-placeholder" for="emailID">Email ID
                                    <span class="required">*</span>
                                </label>
                                <i class="uil uil-user-circle"></i>
                            </div>
                            <div class="form-group form-group-with-icon animated">
                                <input name="password" type="password" id="password" class="form-control"
                                    required="">
                                <label class="form-control-placeholder" for="password">Password
                                    <span class="required">*</span>
                                </label>
                                <i class="uil uil-lock-open-alt"></i>
                            </div>
                            <ul class="list-unstyled login-options" style="display: -webkit-flex;">
                                <li>
                                    <label class="check-container light"> Remember Me
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>

                            <button type="submit" class="btn btn-primary block-btn btn-lg">
                                {{ __('Login') }} <i class='bx bx-right-arrow-alt'></i>
                            </button>

                            @if (Session::has('error'))
                                <div class="text-danger" style="margin-top:15px">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer_script')

@stop
