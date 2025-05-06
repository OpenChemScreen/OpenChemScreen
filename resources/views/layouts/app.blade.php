<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>OpenChemScreen</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @endif
    </head>
    <body id="app">
        <header class="navbar navbar-expand-lg">
            @if (Route::has('login'))
                <nav class="container-fluid">
                    <a href="{{ route('dashboard') }}" class="d-flex align-items-center link-body-emphasis text-decoration-none pt-2">
                        <img src="/images/logo.svg" style="height: 3rem; display: inline-block" alt="OpenChemScreen logo">
                        <h1 class="fs-4 pt-2 ms-2">OpenChemScreen</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/dashboard') }}">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <form method="post" action="{{ route('logout') }}" id="logout-form">@csrf</form>
                                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        Log in
                                    </a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">
                                            Register
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    </div>
                </nav>
            @endif
            @if (Route::has('login'))
                <div class=""></div>
            @endif
        </header>
        <main class="container-fluid h-100-full">
            @yield('content')
        </main>
        <footer class="container-fluid">

        </footer>
    </body>
</html>
