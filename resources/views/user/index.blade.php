@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Usuarios</h3>

        <h3 class="card-header p-3">
            @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                <div class="d-flex justify-content-end">
                    <x-button route="{{ route('users.create') }}" icon="bi bi-person-fill-add" size="fs-3">
                        Crear Usuario
                    </x-button>
                </div>
            @endif
        </h3>

        <div class="card-body">
            @php
                $headers = ['ID', 'Name', 'Email', 'Role', 'Acciones'];
            @endphp

            <x-table :headers="$headers">
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                    {{ $role->role_name }}
                                @endforeach
                            </td>
                            <td>
                                @if ($user->id != 1)
                                    <x-button style="info" route="{{ route('users.show', $user) }}" icon="bi bi-eye"
                                        size="fs-4">
                                    </x-button>
                                    <x-button style="success" route="{{ route('users.edit', $user) }}" icon="bi bi-pen"
                                        size="fs-4">
                                    </x-button>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteUserModal{{ $user->id }}">
                                            <i class="bi bi-trash3 fs-4"></i>
                                        </button>
                                        <div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="deleteUserModalLabel{{ $user->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteUserModalLabel{{ $user->id }}">
                                                            Confirmación</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Estás seguro de que deseas eliminar a
                                                        <strong>{{ $user->name }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancelar</button>
                                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if ($user->roles->contains(4))
                                            <span class="popuptext" id="myPopup"></span>
                                        @else
                                            <x-button route="{{ route('users.add', $user) }}" icon="bi bi-person-fill-up"
                                                size="fs-4">
                                            </x-button>
                                            <x-button route="{{ route('users.delete', $user) }}" icon="bi bi-person-fill-down"
                                                size="fs-4">
                                            </x-button>
                                        @endif
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">There are no users.</td>
                        </tr>
                    @endforelse
                </tbody>
            </x-table>

            <!-- Paginación -->
            <div class="d-flex">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>

@endsection