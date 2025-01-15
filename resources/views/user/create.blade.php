@extends('layouts.app')
@section('content')
<div class="container">
  <form class="mt-2" name="create_platform" action="{{route('users.store')}}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group mb-3">
      <label for="titulo" class="form-label">NOMBRE</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">EMAIL</label>
      <input type="text" class="form-control" id="email" name="email" required>
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">TELEFONO</label>
      <input type="number" class="form-control" id="Telephone" name="Telephone" required>
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">DIRECCION</label>
      <input type="text" class="form-control" id="direction" name="direction" required>
    </input>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">DNI</label>
      <input type="text" class="form-control" id="DNI" name="DNI" required>
    </input>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">CONTRASEÑA</label>
      <input type="text" class="form-control" id="password" name="password" required>
    </input>
</br>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">ROLE_ID</label>
      <select id="role_id" name="role_id">
      <?php foreach ($roles as $role) { ?>
         <option value="<?php echo $role->id; ?>"><?php echo $role->role_name; ?></option>
             <?php } ?>

      </select>
    </div>
    <button type="submit" class="btn btn-primary" name="">Crear</button>
  </form>
</div>
@endsection