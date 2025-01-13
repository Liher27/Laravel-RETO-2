
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" >
        
        <div class="container">
        <nav class="navbar navbar-light navbar-auto" style="background-color:rgb(111, 184, 202); width: auto; height: auto;">
        
        @if(Auth::user()->getRoleID() == 1)
        
        <a href="{{ url('/') }}">
                <img class="img-fluid" src="{{ asset('EEM-logo-color.svg') }}" alt="EEM Logo" style="width: 175px; height: auto;">
        </a>                  
        
        @endif
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ">
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ">
                    <a>
                <select class="form-select" aria-label="Small select example">
                    <option selected>Castellano</option>
                    <option value="1">Euskera</option>
                </select>
                </a>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif       
                        @else
                               <li class="nav-item">
                                        <a class="nav-link" href="{{ route('registrations.index') }}">Matriculas</a>
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
