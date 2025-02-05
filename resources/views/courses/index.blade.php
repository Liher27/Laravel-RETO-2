@extends(request()->query('layout', 'layouts.app')) 
@section('content')
<div class="container">
            <h3 class="card-header p-3">
            @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                <div class="d-flex justify-content-end">
                    <x-button route="{{ route('courses.create') }}" icon="bi bi-person-fill-add" size="fs-3">
                        Crear Modulo
                    </x-button>
                </div>
            @endif
        </h3>

        <div class="card-body">
            @php
                $headers = ['ID_CICLO', 'CICLO_NOMBRE', 'Acciones'];
            @endphp

            <x-table :headers="$headers">
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_name }}</td>
                            <td>
                            <x-button style="info" route="{{ route('courses.show', $course) }}" icon="bi bi-eye"
                                        size="fs-4">
                                    </x-button>
                                    @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                                @if ($userRoles != 1)

                                    
                                    <x-button style="success" route="{{ route('courses.edit', $course) }}" icon="bi bi-pen"
                                        size="fs-4">
                                    </x-button>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteUserModal{{ $course->id }}">
                                        <i class="bi bi-trash3 fs-4"></i>
                                    </button>

                                    <div class="modal fade" id="deleteUserModal{{ $course->id }}" tabindex="-1"
                                        aria-labelledby="deleteUserModalLabel{{ $course->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteUserModalLabel{{ $course->id }}">
                                                        Confirmación
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ¿Estás seguro de que deseas eliminar a <strong>{{ $course->name }}</strong>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                        @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">There are no users.</td>
                        </tr>
                    @endforelse
                </tbody>
            </x-table>
        </div>
    </div>
</div>
@endsection
