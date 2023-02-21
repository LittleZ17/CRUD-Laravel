<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- <link rel="stylesheet" href=""> --}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('resources/css/app.css') }}" >

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: rgba(90, 168, 151, 1);">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">QUOTES
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
        
        <footer class="footer fixed-bottom">
            <div class="pt-3 pb-3 w-full text-center" style="background-color: rgba(90, 168, 151, 1);">
                <img src="http://localhost:8888/crud-laravel/assets/quotelogo.png"  alt="" height="20px">  <span class="text-white">© 2023 Copyright </span>
            </div>
          </footer>
        <!-- <footer>
           <div class="flex justify-center bg-gray-800 h-18 pt-4 pb-4 fixed w-full" style="background-color: rgba(90, 168, 151, 1);">
                 Copyright 
                <div class="text-center" >
                    <img src="http://localhost:8888/crud-laravel/assets/quotelogo.png"  alt="" height="20px">  
                    © 2023 Copyright 
                </div>-->
                <!-- Copyright 
            </div>
          </footer>-->
    </div>
</body>
</html>
