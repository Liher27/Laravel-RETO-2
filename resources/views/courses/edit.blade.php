@extends('layouts.app')
@section('content')
<div class="container">
  <form class="mt-2" name="create_platform" action="{{route('courses.update',$course)}}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
     <label for="titulo" class="form-label">Modulo_ID</label>
     <input type="number" class="form-control" id="id" name="id" required
        value="{{$course->id}}"/>
    </div>
    <div class="form-group mb-3">
      <label for="titulo" class="form-label">Modulo_Nombre</label>
      <input type="text" class="form-control" id="course_name" name="course_name" required>
       {{$course->course_name}}
    </input>
    </div>
    <button type="submit" class="btn btn-primary" name="">Actualizar</button>
  </form>
</div>
@endsection