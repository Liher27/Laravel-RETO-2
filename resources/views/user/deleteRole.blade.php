@extends('layouts.app')

@section('content')

<div class="container">
        <h2>Borrar un rol</h2>
    @csrf
    <div class="form-group mb-3">
        <label for="role_id" class="form-label">ROLES</label>
        <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Role</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user->roles as $role)
                    <tr>    
                        <td>{{$role->role_name}}</td>
                        <td>{{$role->id}}</td>
                        <td>
                        <form action="{{ route('users.deleteRole', ['user' => $user->id, 'role' => $role->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
        </select>
    </div>

    </div>
@endsection

