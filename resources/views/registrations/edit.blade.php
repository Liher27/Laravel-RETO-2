@extends('layouts.app')
@section('content')
<div class="container">
  <form class="mt-2" name="create_platform" action="{{route('registrations.update',$registration)}}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
     <label for="titulo" class="form-label">course_id</label>
     <input type="number" class="form-control" id="course_id" name="course_id" required
        value="{{$registration->id}}"/>
    </div>
    <div class="form-group mb-3">
      <label for="titulo" class="form-label">user_id</label>
      <input type="number" class="form-control" id="user_id" name="user_id" required>
       {{$registration->user_id}}
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">registration_date</label>
      <input type="text" class="form-control" id="registration_date" name="registration_date" required>
        {{$registration->registration_date}}
    </input>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">school_year</label>
      <input type="number" class="form-control" id="school_year" name="school_year" required>
        {{$registration->school_year}}
    </input>
    </div>
    <button type="submit" class="btn btn-primary" name="">Actualizar</button>
  </form>
</div>
@endsection