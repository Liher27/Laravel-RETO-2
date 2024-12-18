@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Asignaturas</h3>
        @if(Auth::user()->getRoleID() == 1 || Auth::user()->getRoleID() == 2 )
             <a href="{{ route('subjects.create') }}" class="btn btn-sm btn-primary">Crear Asignaturas</a>
        @endif
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID_ASIGNATURA</th>
                        <th>ID_CICLO</th>
                        <th>NOMBRE_ASIGNATURA</th>
                        <th>HORAS_ASIGNATURA</th>
                        @if(Auth::user()->getRoleID() == 1 || Auth::user()->getRoleID() == 2)
                        <th>ACCIONES</th> 
                        @endif
                    </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->course_id }}</td>
                        <td>{{ $subject->subject_name }}</td>
                        <td>{{ $subject->subject_hours }}</td>
                        @if(Auth::user()->getRoleID() == 1 || Auth::user()->getRoleID() == 2 )
                            <td>
                                <a href="{{ route('subjects.edit', $subject) }}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{ route('subjects.destroy', $subject) }}" method="POST" style="display:inline;">
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
