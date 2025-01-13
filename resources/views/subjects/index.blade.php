@extends('layouts.app')
@section('content')
<<<<<<< HEAD
<ul>
  @foreach ($subjects as $subject)
    <li>
    <div class="d-flex flex-row">
    
    @if(Auth::user()->getRoleID() == 1 ||Auth::user()->getRoleID() == 2 )

      <a href="{{route('subjects.edit',$subject)}}" class="btn btn-sm btn-warning">Editar</a>
      <form action="{{route('subjects.destroy',$subject)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger" type="submit"
          onclick="return confirm('Are you sure?')">Delete
        </button>
    </form>
    </div>
=======
<div class="container">
<<<<<<< HEAD
    @if(Auth::user()->getRoleID() == 1 || Auth::user()->getRoleID() == 2 )
    <a href="{{ route('subjects.create') }}" class="btn btn-sm btn-primary">Crear Asignaturas</a>
>>>>>>> ebd86c7dafc99119c7e0dfe1a833f536d2a4499e
    @endif
=======
    
>>>>>>> c79230dc9038da66a7dbe20a04bd676fef513616
    <div class="card mt-5">
        <h3 class="card-header p-3">Asignaturas</h3>
        @if(in_array(1, $userRoles) || in_array(2, $userRoles))  
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
                        @if(in_array(1, $userRoles) || in_array(2, $userRoles))  
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
                        @if(in_array(1, $userRoles) || in_array(2, $userRoles))  
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
