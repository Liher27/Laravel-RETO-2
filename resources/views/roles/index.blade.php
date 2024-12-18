@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Roles</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($roles as $roles)
                        <tr>
                            <td>{{ $roles->id }}</td>
                            <td>{{ $roles->role_name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">There are no roles.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection