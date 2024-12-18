@extends('layouts.app')
@section('content')
<ul>
  {{--esto es un comentario: recorremos el listado de posts--}}
    {{-- visualizamos los atributos del objeto --}}
    <li>
      {{$role->id}}
    </li>
</ul>
@endsection