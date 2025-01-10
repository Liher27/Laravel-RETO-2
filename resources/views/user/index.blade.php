@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">USUARIOS</h3>
            @if(in_array(1, $userRoles) || in_array(2, $userRoles))  
            <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Crear Usuario</a>
        @endif
     
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>ROLE</th>
                        @if(in_array(1, $userRoles) || in_array(2, $userRoles))  
                        <th>ACCIONES</th> 
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach($user->roles as $role)    
                                {{ $role->role_name}}
                                @endforeach
                            </td>
                            @if(in_array(1, $userRoles) || in_array(2, $userRoles))  
                            <td>
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Editar</a>
                           
                                <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                               
                                       
                            </td>
                        @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">There are no users.</td>
                        </tr>
                        
                    @endforelse
                    
                </tbody>
                
            </table>
            <div class="d-flex">
            {{ $users->links() }}
            </div>
        </div>
    </div>
    
    <nav aria-label="Navigator">
        <ul class="pagination justify-content-center">
            <li class="page-item enabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection 