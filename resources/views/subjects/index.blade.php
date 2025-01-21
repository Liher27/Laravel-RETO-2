@extends(request()->query('layout', 'layouts.app')) 
@section('content')
<div class="container">
    @if(Auth::user()->getRoleID() == 1 || Auth::user()->getRoleID() == 2)
        <a href="{{ route('subjects.create') }}" class="btn btn-sm btn-primary">Crear Asignaturas</a>
    @endif
    <div class="container">
        <div class="card mt-5">
        <h3 class="card-header p-3">Usuarios</h3>   
        <h3 class="card-header p-3">
            @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                <div class="d-flex justify-content-end">
                    <x-button route="{{ route('subjects.create') }}" icon="bi bi-person-fill-add" size="fs-3">
                        Crear Asignatura
                    </x-button>
                </div>
            @endif
        </h3>
            <div class="d-flex justify-content-end">
                <div class="card-body">
                    @php
                        $headers = ['Id_asignatura', 'Id_ciclo', 'Nombre_asignatura','Horas', 'Acciones'];
                    @endphp
                    <x-table :headers="$headers">
                        <tbody>
                            @foreach ($subjects as $subject)
                                <tr>
                                    <td>{{ $subject->id }}</td>
                                    <td>{{ $subject->course_id }}</td>
                                    <td>{{ $subject->subject_name }}</td>
                                    <td>{{ $subject->subject_hours }}</td>
                                    @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                                        <td>
                                            <x-button style="info" route="{{ route('subjects.show', $subject->course_id) }}"
                                                icon="bi bi-eye" size="fs-4">
                                                <x-button style="success"
                                                    route="{{ route('subjects.edit', $subject->course_id) }}" icon="bi bi-pen"
                                                    size="fs-4">
                                                </x-button>
                                                <form action="{{ route('subjects.destroy', $subject->course_id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteUserModal{{ $subject->course_id }}">
                                                        <i class="bi bi-trash3 fs-4"></i>
                                                    </button>
                                                    <div class="modal fade" id="deleteUserModal{{ $subject->course_id }}"
                                                        tabindex="-1"
                                                        aria-labelledby="deleteUserModalLabel{{ $subject->course_id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="deleteUserModalLabel{{ $subject->course_id}}">
                                                                        Confirmación</h5>
                                                                    <x-button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></x-button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Estás seguro de que deseas eliminar?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancelar</button>
                                                                    <form
                                                                        action="{{ route('subjects.destroy', $subject->course_id)}}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Eliminar</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </x-button>
                                        </td>
                                    @endif
                                </tr>

                            @endforeach
                        </tbody>
                    </x-table>
                    <div class="d-flex">
                        {{ $subjects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection