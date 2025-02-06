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
    body[data-bs-theme='light'] .navbar {
      background: linear-gradient(180deg, #3cb4e5, #3cb4e5);
      color: #fff;
    }

    body[data-bs-theme='dark'] .navbar {
      background: linear-gradient(180deg, rgb(87, 87, 87), rgb(87, 87, 87));
      color: #fff;

    }

    body[data-bs-theme='light'] .main-container {
    background: #f8fafc;
    color: #000 !important;
}

    body[data-bs-theme='dark'] .main-container {
      background: linear-gradient(180deg, #121212, #121212);
      color: #fff;
    }

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
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
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
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3 border-bottom text-center">
        <h1 class="h2">Panel administrador</h1>
    </div>
</main>

    <div class="card-body">
      @php
    $headers = ['Numero de alumnos matriculados'];
  @endphp
      <div id="app"></div>
      <div class="form-check form-switch" style=" display flex-direction: auto;">
      </div>

      <main class="py-4">
        @yield('content')
        @include('layouts.theme-changer')

</html>