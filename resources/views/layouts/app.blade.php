<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        /* Estilos para la navbar fija a la izquierda */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 250px; /* Ajusta el ancho de la navbar */
            background: linear-gradient(180deg, #4e73df, #224abe); /* Degradado de fondo */
            color: #fff;
            padding: 1rem 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100vh;
        }

        /* Cambio en el color de fondo al pasar el mouse sobre la navbar */
        .navbar:hover {
            background: linear-gradient(180deg, #224abe, #4e73df);
        }

        /* Alineación y espaciado de los elementos dentro de la navbar */
        .navbar-nav {
            display: block;
            flex-direction: column;
            padding: 0;
            margin: 0;
        }

        /* Estilos para cada enlace de la navbar */
        .navbar-nav .nav-item {
            margin: 10px 0;
        }

        .navbar-nav .nav-link {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        /* Efecto de hover en los enlaces */
        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffd700;
        }

        /* Toggler (hamburguesa) para pantallas pequeñas */
        .navbar-toggler {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            border: none;
            color: #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        /* Estilo del dropdown */
        .nav-item.dropdown .dropdown-menu {
            background-color: #3b5998;
            position: absolute;
            left: 0;
            min-width: 200px;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .dropdown-item {
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
        }

        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Ajuste para que el contenido no quede apretado */
        .main-container {
            margin-left: 260px;
            padding: 0rem;
        }
    </style>
</head>

<body style="background-color:rgb(245, 245, 245);">

    <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
        <a href="{{ url('/') }}">
            <img class="img-responsive " src="{{ asset('EEM-logo-color.svg') }}" alt="EEM Logo" style="width: 175px; height: auto;">
        </a>

        <!-- Toggler button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <a>
                    <select class="form-select" aria-label="Small select example" style="margin: 10px 15px;">
                        <option selected>Castellano</option>
                        <option value="1">Euskera</option>
                    </select>
                </a>

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registrations.index') }}">{{ __('Asignaturas') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('subjects.index') }}">{{ __('Asignatura') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}">{{ __('Modelos') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">{{ __('Usuarios') }}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
    </header>

    <div class="main-container">
        <div id="app"></div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
