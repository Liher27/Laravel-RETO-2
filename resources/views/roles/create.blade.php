@extends('layouts.app')
@section('content')
  <div class="container">
    <form class="mt-2" name="create_platform"
       action="{{route('roles.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="form-group mb-3">
      <label for="texto" class="form-label">NOMBRE_ROLE</label>
      <input type="text" class="form-control" id="role_name" name="role_name" required>
    </input>
    </div>
      <button type="submit" class="btn btn-primary" name="">Crear</button>
    </form>
  </div>
@endsection