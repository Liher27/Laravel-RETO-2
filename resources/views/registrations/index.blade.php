@extends(request()->query('layout', 'layouts.app')) 
@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">
            @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                <div class="d-flex justify-content-end">
                    <x-button route="{{ route('registrations.create') }}" icon="bi bi-person-fill-add" size="fs-3">
                        Crear Matricula
                    </x-button>
                </div>
            @endif
        </h3>
        <div class="d-flex justify-content-end">
            <div class="card-body">
                @php
                    $headers = ['ID', 'Name', 'Registration', 'Año escolar', 'Acciones'];
                @endphp
                <x-table :headers="$headers">
                    <tbody>
                        @foreach($registrations as $registration)
                            <tr>
                                <td>{{ $registration->id }}</td>
                                <td>{{ $registration->user->name }}</td>
                                <td>{{ $registration->registration_date }}</td>
                                <td>{{ $registration->school_year }}</td>
                                @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                                    <td>
                                            <x-button style="info" route="{{ route('registrations.show', $registration->id) }}"
                                            icon="bi bi-eye" size="fs-4">
                                            <x-button style="success"
                                                route="{{ route('registrations.edit', $registration->id) }}" icon="bi bi-pen"
                                                size="fs-4">
                                            </x-button>
                                            <form action="{{ route('registrations.destroy', $registration->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteUserModal{{ $registration->id }}">
                                                    <i class="bi bi-trash3 fs-4"></i>
                                                </button>
                                                <div class="modal fade" id="deleteUserModal{{ $registration->id}}" tabindex="-1"
                                                    aria-labelledby="deleteUserModalLabel{{ $registration->id}}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="deleteUserModalLabel{{ $registration->id}}">
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
                                                                    action="{{ route('registrations.destroy', $registration->id) }}"
                                                                    method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <x-button class="btn btn-sm btn-danger"
                                                                        type="submit">Delete</x-button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </x-button>
                                        <div class="d-flex">
                                            {{ $registrations->links() }}
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </x-table>
            </div>
        </div>
    </div>
    @endsection