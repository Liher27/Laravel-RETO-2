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
                            @if (in_array(1, $userRoles) || in_array(2, $userRoles))
                                <td>
                                    @if ($user->id != 1)
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Editar</a>
                                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Borrar</button>
                                        </form>
                                        @if ($user->roles->contains(4)) <!-- Check if the user has the role with ID 4 -->
                                            <span class="popuptext" id="myPopup">No se puede añadir mas role en este usuario</span>
                                        @else
                                            <a href="{{ route('users.add', $user) }}" class="btn btn-sm btn-primary">Añadir Role</a>
                                            <a href="{{ route('users.delete', $user) }}" class="btn btn-sm btn-primary">Borrar Role</a>
                                        @endif
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
            <div class="d-flex">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
