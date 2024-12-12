@extends('layouts.app')
@section('content')
<div class="container">
  <form class="mt-2" name="create_platform" action="{{route('subjects.update',$subject)}}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
      <label for="titulo" class="form-label">Course_id</label>
      <input type="text" class="form-control" id="course_id" name="course_id" required
        value="{{$subject->course_id}}"/>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">Subject_name</label>
      <input type="text" class="form-control" id="subject_name" name="subject_name" required>
       {{$subject->subject_name}}
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">Subject_hour</label>
      <input type="number" class="form-control" id="subject_hours" name="subject_hours" required>
        {{$subject->subject_hours}}
    </input>
    </div>
    <button type="submit" class="btn btn-primary" name="">Actualizar</button>
  </form>
</div>
@endsection