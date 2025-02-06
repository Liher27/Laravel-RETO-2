@extends(request()->query('layout', 'layouts.app')) 
@section('content')
<div class="container">
    <div class="card mt-5">
    <h3 class="card-header p-3">Roles</h3>   
        @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                <div class="d-flex justify-content-end">
                    <x-button route="{{ route('roles.create') }}" icon="bi bi-person-fill-add" size="fs-3">
                        Crear Rol
                    </x-button>
                </div>
            @endif
        <div class="card-body">
            @php
                $headers = ['ID', 'Nombre del rol'];
            @endphp

            <x-table :headers="$headers">
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                        <td>{{ $role->id }}</td>
                            <td>{{ $role->role_name }}</td>
                            <td>
                            <x-button style="info" route="{{ route('courses.show', $role) }}" icon="bi bi-eye"
                                        size="fs-4">
                                    </x-button>
                                    @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                                @if ($userRoles != 1)

                                    
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteUserModal{{ $role->id }}">
                                        <i class="bi bi-trash3 fs-4"></i>
                                    </button>

                                    <div class="modal fade" id="deleteUserModal{{ $role->id }}" tabindex="-1"
                                        aria-labelledby="deleteUserModalLabel{{ $role->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteUserModalLabel{{ $role->id }}">
                                                        Confirmación
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ¿Estás seguro de que deseas eliminar a <strong>{{ $role->name }}</strong>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
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
@endsection