@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Assign Role to User</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('users.addRole', $user->id) }}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="role_id" class="form-label">ROLE_ID</label>
        <select id="role_id" name="role_id" class="form-control">
            <option value="1">God</option>
            <option value="2">Admin</option>
            <option value="3">Professor</option>
            <option value="4">Student</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Role</button>
</form>

    </div>
@endsection
