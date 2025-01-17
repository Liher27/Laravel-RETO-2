@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Añadir nuevo rol</h2>
        <form action="{{ route('users.addRole', $user) }}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="role_id" class="form-label">ROLE_ID</label>
        <select id="role_id" name="role_id" class="form-control">
            <?php foreach ($roles as $role) { ?>
         <option value="<?php echo $role->id; ?>"><?php echo $role->role_name; ?></option>
             <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Añadir Rol</button>
</form>

    </div>
@endsection
