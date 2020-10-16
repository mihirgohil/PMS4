<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="true">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PMS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{  asset('css/home-page.css') }} " rel="stylesheet">
</head>
<body>

        <div class="wrapper">
			<nav class="navbar">
                    <a href="/">
                     <img class="logo" src="images/college_logo.png">
                    </a>
				<ul>
					<li><a href="{{ route('company.dashboard') }}">Company</a></li>
					<li><a href="{{ route('student.dashboard') }}">Student</a></li>
                    <li><a href="{{ route('placement-coordinator.dashboard') }}">College</a></li>
				</ul>
			</nav>
			<div class="center">
				<h1>Welcome to Chimanbhai Patel Institute of<br>Post Graduate
					Computer Applications[CPPGICA] Placement Program.</h1>
		</div>
		</div>
</body>
</html>
