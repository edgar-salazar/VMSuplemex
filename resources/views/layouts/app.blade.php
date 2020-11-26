<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VMSuplemex') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Font Awesome icons (free version)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Fonts CSS-->
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/body.css">
</head>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color :#1a8fef;">
            <div class="container">
                <a class="navbar-brand" style="color: white; font-size: 25px;" href="{{ url('/') }}">
                    {{ config('app.name', 'VMSuplemex') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="navbar- mr-auto">
                            <a href="/" class="nav-link" style="color: #ffc000; font-size: 16px;">Inicio</a>
                        </li>
                        <li class="navbar- mr-auto">
                            <a href="/productos" class="nav-link" style="color: #ffc000; font-size: 16px;">Productos</a>
                        </li>
                        <li class="navbar- mr-auto">
                          <a href="/cotizacion" class="nav-link" style="color: #ffc000; font-size: 16px;">Cotización</a>
                        </li>
                        <li class="navbar- mr-auto">
                            <a href="/contacto" class="nav-link" style="color: #ffc000; font-size: 16px;">Contacto</a>
                        </li>
                        <li class="navbar- mr-auto">
                            <a href="/nosotros" class="nav-link" style="color: #ffc000; font-size: 16px;">Nosotros</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color:  white; font-size: 16px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:  white; font-size: 16px;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: white;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #1a8fef;">
                                    <a class="dropdown-item" style="color: white;  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" style="color: white;" href="{{url('/admin/')}}">Administración</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>

