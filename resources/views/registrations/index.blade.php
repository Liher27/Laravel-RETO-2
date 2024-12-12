
@extends('layouts.app')
@section('content')
<ul>
  @foreach ($registrations as $registration)
    <li>
      <a href="{{route('registrations.show',$registration)}}"> {{$registration->id}}</a>.
    </li>
  @endforeach
</ul>
@endsection