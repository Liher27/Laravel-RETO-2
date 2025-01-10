@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">ASIGNATURA PROFESORADA</h3>
        @if(in_array(1, $userRoles) || in_array(2, $userRoles))  
             <a href="{{ route('userSubjects.create') }}" class="btn btn-sm btn-primary">Crear Nueva</a>
        @endif
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID_PROFESOR</th>
                        <th>ID_ASIGNATURA</th>
                        <th>DIAS</th>
                        <th>HORAS</th>
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
@endsection
