@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Modelos</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                        <th>ID_MODELO</th>
                        <th>MODELO_NOMBRE</th>
                        @if(Auth::user()->getRoleID() == 1 || Auth::user()->getRoleID() == 2)
                        <th>Acciones</th> 
                        @endif
                    </tr>
                </thead>
                <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_name }}</td>
                        @if(Auth::user()->getRoleID() == 1 || Auth::user()->getRoleID() == 2 )
                            <td>
                                <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
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