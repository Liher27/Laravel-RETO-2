@extends('layouts.app')
@section('content')
  <div class="container">
    <form class="mt-2" name="create_platform"
       action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3">
      <label for="titulo" class="form-label">CILCO_NOMBRE</label>
      <input type="text" class="form-control" id="course_name" name="course_name" required>
    </div>
      </label>
      <button type="submit" class="btn btn-primary" name="">Crear</button>
    </form>
  </div>
@endsection