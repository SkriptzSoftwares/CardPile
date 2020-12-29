<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="{{asset("UEassets/fonts/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("UEassets/css/Brands.css")}}">
    <link rel="stylesheet" href="{{asset("UEassets/css/Footer-Dark.css")}}">
    <link rel="stylesheet" href="{{asset("UEassets/css/Navigation-with-Button.css")}}">
    <link rel="stylesheet" href="{{asset("UEassets/css/styles.css")}}">
    <link rel="stylesheet" href="{{asset("UEassets/css/Highlight-Clean.css")}}">
    <title>@yield('title')</title>
    @yield('head')
    <style>
        .dropdown-link-white {
            color: #000000 !important;
            background-color: rgba(255, 255, 255, 1);

        }

        .dropdown-link-white:hover {
            background-color: #ebebeb !important;
            color: #000 !important;
        }
    </style>
</head>
<body>
<div
    class="container-fluid d-sm-flex d-md-flex d-lg-flex justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center"
    style="min-height: 40px;background: #001b7d;">
    <h6 class="text-center text-white" style="margin-bottom: 0;">UNRELEASED VERSION, DO NOT REDISTRIBUTE!</h6>
</div>
<nav class="navbar navbar-dark navbar-expand-md bg-primary navigation-clean-button bg-primary-gradient">
    <div class="container"><a class="navbar-brand" href="{{url("")}}"><img src="assets/img/TeAm-2.png"
                                                                           style="max-width: 200px;height: auto;"></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{url("")}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url("shop")}}">Shop</a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                                                 aria-expanded="false" href="#">Extra&nbsp;</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Example Page 1</a><a
                            class="dropdown-item" href="#">Example Page 2</a></div>
                </li>
            </ul>
            <span class="navbar-text actions">
                        @guest
                    <a class="login" href="{{route('login')}}">Log In</a>@if (Route::has('register'))<a class="login"
                                                                                                        href="{{route('register')}}">Sign Up</a>@endif
                @else
                    <li class="nav-item dropdown" style="list-style: none !important;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if(\App\Helpers\PermissionsHelper::instance()->getPerms('ADMIN'))
                                        <a class="dropdown-item dropdown-link-white" href="{{ url('admin') }}">
                                        Admin
                                    </a>
                                        <hr class="dropdown-divider">
                                    @endif

                                    <a class="dropdown-item dropdown-link-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                @endguest
                    </span>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>
<div class="brands"><a href="{{url("")}}"><img src="{{asset("assets/img/TeAm-2.png")}}" style="height: 30px;"></a></div>
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Market</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Infos</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Cardpile</h3>
                    <p>Cardpile is a pre-made laravel template for developers to create their own shop quickly. It is free and easy to use. It is open source, so the community helps making changes and updates, and security patches are made very often.</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="col-lg-12 text-center" style="margin-top: 25px;"><a href="https://skriptz.wrenchdev.me"><img src="{{asset("UEassets/img/logolong.png")}}" style="max-width: 200px;"></a></div>
    <div class="col-lg-12">
        <h6 class="text-center text-muted">© 2020</h6>
    </div>
</body>
</html>
