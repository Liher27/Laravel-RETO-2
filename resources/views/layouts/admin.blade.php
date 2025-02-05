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

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Template · Bootstrap v5.3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQ4ZKMWhzA1AN0I7vc5Nf2fYsvBrU8yfFnzUM2DgBl1E30+gvdpTtSKLr" crossorigin="anonymous">

    <style>
      body {
        font-size: .875rem;
      }

      .feather {
        width: 16px;
        height: 16px;
      }

      .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 48px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
      }

      .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 1rem;
        overflow-x: hidden;
        overflow-y: auto;
      }

      .sidebar .nav-link.active {
        color: #007bff;
      }

      .sidebar .nav-link:hover .feather,
      .sidebar .nav-link.active .feather {
        color: inherit;
      }
    </style>
  </head>

<body>
  <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
    <a href="{{ url('/') }}">
      <img class="img-fluid mx-auto d-block" src="{{ asset('EEM-logo-color.svg') }}" alt="EEM Logo"
        style="width: 175px; height: auto;">
    </a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="nav-link px-3 " href="{{ route('logout') }}"
      onclick="event.preventDefault();document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('login') }}">
                <span data-feather="home"></span>
                Login
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('registrations.index') }}">
                <span data-feather="book"></span>
                Matriculas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('subjects.index') }}">
                <span data-feather="book-open"></span>
                  Asignaturas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.index')}}">
                <span data-feather="users"></span>
                Usuarios
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('courses.index')}}">
                <span data-feather="layers"></span>
                Modulos
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Panel administrador</h1>
        </div>
        <div class="card-body">
          @php
      $headers = ['Numero de alumnos matriculados'];
    @endphp
          <x-table :headers="$headers">
            <tbody>
              <h1>
                <a class="nav-link"
                  href="{{ route('registrations.index') }}">{{ __('Nº de alumnos totales matriculados') }}</a>
              </h1> @forelse($registrations as $registration)
          <tr>
            <td>{{ $registration->count() }}</td>          
          </tr>
        @empty
        <tr>
        <td colspan="3">No hay alumnos matriculados.</td>
        </tr>
      @endforelse
            </tbody>
          </x-table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF2CsFhhKhlFU4tWixtzFgsP8S1rdBu7mx69I2a8kB8"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>