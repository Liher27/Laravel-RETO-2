
@extends('layouts.app')
@section('content')
<ul>
  {{--esto es un comentario: recorremos el listado de posts--}}
  @foreach ($registrations as $registration)
    {{-- visualizamos los atributos del objeto --}}
    <li>
      <a href="{{route('registrations.show',$registration)}}"> {{$registration->id}}</a>.
    </li>
  @endforeach
</ul>
@endsection