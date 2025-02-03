@extends('layouts.app')
@section('content')
  <div class="container">
    <form class="mt-2" name="create_platform"
       action="{{route('registrations.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3">
      <label for="titulo" class="form-label">ID_CICLO</label>
      <input type="number" class="form-control" id="course_id" name="course_id" required>
    </div>
      <div class="form-group mb-3">
      <label for="titulo" class="form-label">ID_USER</label>
      <input type="number" class="form-control" id="user_id" name="user_id" required>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">FECHA_MATRICULACION</label>
      <input type="text" class="form-control" id="registration_date" name="registration_date" required>
      <a></a>
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">AÑO_ESCOLADO</label>
      <input type="number" class="form-control" id="school_year" name="school_year" required>
    </input>
      </label>
      </div>
      <button type="submit" class="btn btn-primary" name="">Crear</button>
    </form>
  </div>
@endsection