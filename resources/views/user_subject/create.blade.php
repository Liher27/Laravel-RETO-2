@extends('layouts.app')
@section('content')
<div class="container">
  <form class="mt-2" name="create_platform"
  action="{{route('userSubjects.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
      <label for="titulo" class="form-label">ID_PROFESOR</label>
      <input type="number" class="form-control" id="profesor_id" name="profesor_id" required>
      
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">ID_ASIGNATURA</label>
      <input type="number" class="form-control" id="subject_id" name="subject_id" required>
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">DIAS</label>
      <input type="text" class="form-control" id="day" name="day" required>
    </input>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">HORAS</label>
      <input type="text" class="form-control" id="day" name="day" required>
    </input>
    </div>
    <button type="submit" class="btn btn-primary" name="">Crear</button>
  </form>
</div>
@endsection