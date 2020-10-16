<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Placement Coordinator</title>

    <!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('placement-coordinator.dashboard') }}">
            <img src="{{ asset('images/college_logo.png') }}"  width="30" height="30" class="d-inline-block align-top" alt="">
                {{ __('CPPGICA Placement Program') }}
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @if (Auth::guard('placement-coordinator')->guest())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('placement-coordinator.login') }}">{{ __('Login') }}</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('placement-coordinator.register') }}">{{ __('Register') }}</a>
                        </li> --}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('placement-coordinator')->user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                {{-- add new coordinator --}}
                                <a class="dropdown-item" href=""
                                onclick="event.preventDefault();
                                                     document.getElementById('add-coordinator-form').submit();">
                                    {{ __('Add Coordinator') }}
                                </a>
                                <form id="add-coordinator-form" action="{{ route('placement-coordinator.addNewCo') }}" method="GET" style="display: none;">
                                    @csrf
                                </form>
                                
                                {{-- Log out --}}
                                <a class="dropdown-item" href="{{ route('placement-coordinator.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('placement-coordinator.logout') }}" method="POST" style="display: none;">
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
