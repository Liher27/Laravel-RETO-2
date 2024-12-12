@extends('layouts.app')

@section('content')
<ul>
  @foreach ($subjects as $subject)
    <li>
    <div class="d-flex flex-row">
    <a href="{{route('subjects.show',$subject)}}"> {{$subject->subject_name}}</a>
    @if(Auth::user()->getRoleID() == 1 ||Auth::user()->getRoleID() == 2 )

      <a href="{{route('subjects.edit',$subject)}}" class="btn btn-sm btn-warning">Editar</a>
      <form action="{{route('subjects.destroy',$subject)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger" type="submit"
          onclick="return confirm('Are you sure?')">Delete
        </button>
    </form>
    </div>
    @endif
  </li>
    
  @endforeach
</ul>
@endsection