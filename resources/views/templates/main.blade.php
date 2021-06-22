<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ config('app.name','Scheduling System') }}</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" defer> </script>

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>

                </ul>

            </div>
            <div class="form-inline my-2 my-lg-0">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{ url('/home') }}" >Home</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                            @csrf
                        </form>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </nav>



    <main class="container">
        @yield('content')
    </main>
</body>

</html>
