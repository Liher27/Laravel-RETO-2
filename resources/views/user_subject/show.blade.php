
@extends('layouts.app')

@section('content')
<ul>
    <li>
        id de la asignatura asignada: {{$user_subject->id}}
    </li>
    <li>
        id del profesor: {{$user_subject->profesor_id}}
    </li>
    <li>
        id de la asignatura: {{$user_subject->subject_id}}
    </li>
    <li>
        dia: {{$user_subject->day}}
    </li>
    <li>
        hora: {{$user_subject->hour}}
    </li>
</ul>
@endsection