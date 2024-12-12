@extends('layouts.app')

@section('content')

<ul>
    <li>
      id del curso: {{$registration->id}}
    </li>
    <li>
        user_id: {{$registration->user_id}}
    </li>
    <li>
        fecha de matriculacion: {{$registration->registration_date}}
    </li>
    <li>
        curso escolar: {{$registration->school_year}}
    </li>
</ul>
@endsection