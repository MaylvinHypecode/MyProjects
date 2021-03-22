<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Luxury Cars</title>

    <!-- Scripts -->
    <script src="{{ asset('js/login.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar">
        <div class="container">
            <a href="http://127.0.0.1:8000/"><img src="https://d2t1xqejof9utc.cloudfront.net/screenshots/pics/d4cea4f538f36368d56e55b71c9a1a51/large.png" alt="logo" /></a>
            <h1>Luxury Cars</h1>
            <ul class="navbar-ul">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item1">
                        <a class="nav-link1" href="{{ route('login') }}">Log-in</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item2">
                            <a class="nav-link2" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else

                    <a class="liaison-panier" href="{{ url("/basket")}}"><img src="https://image.flaticon.com/icons/png/512/34/34627.png" alt="panierlogo"></a>
                    <li class="nav-item-user-home">
                        <a href="{{ url('/admin') }}"> {{ Auth::user()->name }}</a>
                    </li>

                    <li class="nav-item-log-out-home" aria-labelledby="navbarDropdown">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Log-out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
