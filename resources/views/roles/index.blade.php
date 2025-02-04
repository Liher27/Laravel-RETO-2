@extends(request()->query('layout', 'layouts.app')) 
@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Roles</h3>
        @if(in_array(1, $userRoles) || in_array(2, $userRoles))
            <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary">Crear Role</a>
        @endif
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->role_name }}</td>
                            @if(in_array(1, $userRoles) || in_array(2, $userRoles))
                                <td>
                                    @if($role->id != 1 && $role->id != 2 && $role->id != 3 && $role->id != 4)
                                        <form action="{{ route('roles.destroy', $role) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    @endif
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">There are no roles.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection