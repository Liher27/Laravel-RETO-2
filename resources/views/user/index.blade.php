@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">USUARIOS</h3>
        @if(in_array(1, $userRoles) || in_array(2, $userRoles))
            <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Crear Usuario</a>
        @endif
        <div class="card-body">
            @php
                $headers = ['ID', 'Name', 'Email', 'Role', 'Acciones'];
            @endphp
            <x-table :headers="$headers">
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
                        @if (in_array(1, $userRoles) || in_array(2, $userRoles))
                            <td>
                                @if ($user->id != 1)
                                    <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Editar</a>

                                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            type="button">
                                            Borrar
                                        </button>
                                    </form>

                                    @if ($role->id != 4)
                                        <a href="{{ route('users.add') }}" class="btn btn-sm btn-primary">Añadir Role</a>
                                    @else
                                        <span class="text-muted">No se pueden añadir más roles</span>
                                    @endif
                                @endif
                            </td>
                        @endif
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No hay usuarios disponibles.</td>
                    </tr>
                @endforelse
            </x-table>

            <div class="d-flex">
                {{ $users->links() }}
            </div>
        </div>
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Borrar este Usuario?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Este cambio no se podrá revertir.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger">Borrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection