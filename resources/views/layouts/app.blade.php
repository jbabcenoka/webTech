<!doctype html>
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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                           <li><a class="nav-link" href="{{ url('/') }}">{{ __('messages.home') }} </a></li>
                           <li><a class="nav-link" href="{{ url('/about') }}">{{ __('messages.about') }}</a></li>
                           <li><a class="nav-link" href="{{ url('/gallery') }}">{{ __('messages.flower_galery') }}</a></li>
                           @if (Auth::check()) 
                            @if(!is_null(Auth::user()->email_verified_at))
                           @if (Auth::check()) 
                           <li><a class="nav-link" href="{{ url('allorders/'.Auth::user()->id) }}">{{ __('messages.Orders') }}</a></li>
                           @endif
                           
                           
                           @if (Auth::check() && Auth::user()->role ==true) 
                           <li><a class="nav-link" href="{{ url('shop-orders/') }}">{{ __('messages.Administrator_tools') }}</a></li>
                           <li><a class="nav-link" href="{{ url('users-orders/') }}">{{ __('messages.users_orders') }}</a></li>
                           <li><a class="nav-link" href="{{ url('emploqees/') }}">{{ __('messages.Emploqees') }}</a></li>
                           @endif
                           
                           @endif
                           @endif

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" href="{{ url('lang/'.'lv') }}">LV</a></li>
                         <li><a class="nav-link" href="{{ url('lang/'.'en') }}">ENG</a></li>
                         <li><a class="nav-link" href="{{ url('lang/'.'ru') }}">RU</a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('messages.Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('messages.Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

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
</body>
</html>
