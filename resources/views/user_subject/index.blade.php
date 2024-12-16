
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


