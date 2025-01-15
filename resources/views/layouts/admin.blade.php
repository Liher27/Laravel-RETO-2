
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
<body style="background-color:rgb(255, 255, 255);">
    <div id="app" >
        <div class="container">
        <nav class="navbar navbar-light navbar-auto" style="background-color:rgb(248, 248, 248); width: auto; height: auto;">
        <a href="{{ url('/') }}">
                <img class="img-fluid" src="{{ asset('EEM-logo-color.svg') }}" alt="EEM Logo" style="width: 175px; height: auto;">
        </a>                  
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ">
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav" >
                        <a>
                            <select class="form-select" aria-label="Small select example">
                                <option selected>Castellano</option>
                                <option value="1">Euskera</option>
                            </select>
                        </a>
                </div>
            </div>
        </nav>
        bienvenido admin
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
