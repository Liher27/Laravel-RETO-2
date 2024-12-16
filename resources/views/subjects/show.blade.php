@extends('layouts.app')
@section('content')
<ul>

    <li>
      <p>ID de modelo {{$subject->id}} </p>
      <p>ID de curso {{$subject->course_id}}</p>   
      <p>Nombre de modelo {{$subject->subject_name}}</p>
      <p>Hora de modelo {{$subject->subject_hours}}</p>
    </li>
</ul>
@endsection