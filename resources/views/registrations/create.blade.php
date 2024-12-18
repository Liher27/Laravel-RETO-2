@extends('layouts.app')
@section('content')
  <div class="container">
    <form class="mt-2" name="create_platform"
       action="{{route('registrations.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3">
      <label for="titulo" class="form-label">course_id</label>
      <input type="number" class="form-control" id="course_id" name="course_id" required>
    </div>
      <div class="form-group mb-3">
      <label for="titulo" class="form-label">user_id</label>
      <input type="number" class="form-control" id="user_id" name="user_id" required>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">registration_date</label>
      <input type="text" class="form-control" id="registration_date" name="registration_date" required>
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">school_year</label>
      <input type="number" class="form-control" id="school_year" name="school_year" required>
    </input>
      </label>
      </div>
      <button type="submit" class="btn btn-primary" name="">Crear</button>
    </form>
  </div>
@endsection