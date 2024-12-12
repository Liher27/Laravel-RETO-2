
@extends('layouts.app')

@section('content')
<ul>
  @foreach ($user_subjects as $user_subject)
    <li>
      <a href="{{route('userSubjects.show',$user_subject)}}"> {{$user_subject->id}}</a>
    </li>
  @endforeach
</ul>
@endsection
<ul>
  {{--esto es un comentario: recorremos el listado de posts--}}
  @foreach ($user_subjects as $user_subject)
    {{-- visualizamos los atributos del objeto --}}
    <li>
      <a href="{{route('userSubjects.show',$user_subject)}}"> {{$user_subject->id}}</a>.
    </li>
  @endforeach
</ul>

