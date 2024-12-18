@extends('layouts.app')

@section('content')
<ul>
  {{--esto es un comentario: recorremos el listado de posts--}}
    {{-- visualizamos los atributos del objeto --}}
    <li>
      id del curso: {{$user->id}}
    </li>
    <li>
      Nombre del alumno: {{$user->name}}
    </li>
    <li>
      Email: {{$user->email}}
    </li>
    <li>
      Telefono: {{$user->direccion}}
    </li>
    <li>
      Dni: {{$user->dni}}
    </li>
    <li>
      Rol id: {{$user->role_id}}
    </li>
</ul>
@endsection