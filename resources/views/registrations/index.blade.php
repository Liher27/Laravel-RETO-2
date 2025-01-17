@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Matriculas</h3>
        @if(in_array(1, $userRoles) || in_array(2, $userRoles)) 
            <a href="{{ route('registrations.create') }}" class="btn btn-sm btn-primary">Crear Matriculas</a>
        @endif
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID_MATRICULA</th>
                        <th>ID_USER</th>
                        <th>FECHA_MATRICULACION</th>
                        <th>AÑO_ESCOLADO</th>
                        @if(Auth::user()->getRoleID() == 1 || Auth::user()->getRoleID() == 2)
                        <th>ACCIONES</th> 
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($registrations as $registration)
                        <tr>
                            <td>{{ $registration->id }}</td>
                            <td>{{ $registration->user->name }}</td>
                            <td>{{ $registration->registration_date }}</td>
                            <td>{{ $registration->school_year }}</td>
                            @if(in_array(1, $userRoles) || in_array(2, $userRoles)) 
                                <td>
                            
                                    <a href="{{ route('registrations.edit', $registration) }}" class="btn btn-sm btn-primary">Editar</a>
                                    <form action="{{ route('registrations.destroy', $registration) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                        @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection