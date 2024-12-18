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
                        <th>Rol name</th>
                        <th>day</th>
                        <th>Rol name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($user_subjects as $user_subjects)
                        <tr>
                            <td>{{ $user_subjects->id }}</td>
                            <td>{{ $user_subjects->profesor_id }}</td>
                            <td>{{ $user_subjects->subject_id }}</td>
                            <td>{{ $user_subjects->day }}</td>
                            <td>{{ $user_subjects->hour }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">There are no user_subjects.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> ebd86c7dafc99119c7e0dfe1a833f536d2a4499e
