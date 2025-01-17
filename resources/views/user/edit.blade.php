@extends('layouts.app')
@section('content')
<div class="container">
  <form class="mt-2" name="create_platform" action="{{route('users.update',$user)}}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
      <label for="titulo" class="form-label">NOMBRE</label>
      <input type="text" class="form-control" id="name" name="name" required
        value="{{$user->name}}"/>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">EMAIL</label>
      <input type="text" class="form-control" id="email" name="email" required>
       {{$user->email}}
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">TELEFONO</label>
      <input type="number" class="form-control" id="Telephone" name="Telephone" required>
        {{$user->Telephone}}
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">DIRECCION</label>
      <input type="text" class="form-control" id="direction" name="direction" required>
       {{$user->direction}}
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">DNI</label>
      <input type="text" class="form-control" id="DNI" name="DNI" required>
       {{$user->DNI}}
    </input>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">CONTRASEÑA</label>
      <input type="text" class="form-control" id="password" name="password" required>
       {{$user->password}}
    </input>
</br>
    <button type="submit" class="btn btn-primary" name="">Actualizar</button>
  </form>
</div>
@endsection