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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 250px;
            background: linear-gradient(180deg, #3cb4e5, #3cb4e5);
            color: #fff;
            padding: 1rem 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100vh;
        }

        .navbar:hover {
            background: linear-gradient(180deg, rgba(60, 181, 229, 0.6), rgba(60, 181, 229, 0.6));
        }

        .navbar-nav .nav-link {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffd700;
        }

        .navbar-toggler {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            border: none;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .nav-item.dropdown .dropdown-menu {
            background-color: #3b5998;
            position: absolute;
            left: 0;
            min-width: 200px;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .dropdown-item {
            padding: 10px 20px;
            text-decoration: none;
        }

        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .main-container {
            margin-left: 250px;
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .navbar {
                width: 100%;
                height: auto;
                position: relative;
                box-shadow: none;
            }

            .navbar-nav {
                flex-direction: column;
                padding-top: 1rem;
            }

            .main-container {
                margin-left: 0;
            }

            .navbar-toggler {
                display: block;
            }

            .navbar-collapse {
                display: none;
                width: 100%;
                margin-top: 1rem;
            }

            .navbar-collapse.show {
                display: block;
            }
        }
    </style>

</head>

<body style="background-color:rgb(245, 245, 245);">

    <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
        <button style='margin: 10px 0' ; class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
            <a href="{{ url('/') }}">
                <img class="img-responsive" src="{{ asset('EEM-logo-color.svg') }}" alt="EEM Logo"
                    style="width: 175px; height: auto;">
            </a>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registrations.index') }}"><u>{{ __('Matriculas') }}</u> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('subjects.index') }}"><u>{{ __('Asignatura') }}</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}"><u>{{ __('Ciclos') }}</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}"><u>{{ __('Usuarios') }}</u></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url()->current() }}?layout=layouts.app" class="bi bi-brightness-high-fill fs-3"></a>
                        <a href="{{ url()->current() }}?layout=layouts.appDark" class="bi bi-moon fs-3"></a>
                    </li>

                    <a>
                        <select class="form-select" aria-label="Small select example" style="margin: auto;">
                            <option selected>Castellano</option>
                            <option value="1">Euskera</option>
                        </select>
                    </a>
                @endguest
            </ul>
        </div>
    </header>

    <div class="main-container">
        <div id="app"></div>
        <div class="form-check form-switch" style=" display flex-direction: auto;">
        </div>
        <main class="py-4">
            @yield('content')
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                <symbol id="circle-half" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                </symbol>
                <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                    <path
                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                    <path
                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                </symbol>
                <symbol id="sun-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                </symbol>
            </svg>
            <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
                <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme"
                    type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                    <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="light" aria-pressed="false">
                            <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                <use href="#sun-fill"></use>
                            </svg>
                            Claro
                            <svg class="bi ms-auto d-none" width="1em" height="1em">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                            aria-pressed="false">
                            <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                <use href="#moon-stars-fill"></use>
                            </svg>
                            Oscuro
                            <svg class="bi ms-auto d-none" width="1em" height="1em">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>

        </main>
    </div>

</body>

</html>