@extends(request()->query('layout', 'layouts.app')) 
@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">ASIGNATURA PROFESORADA</h3>
        @if(in_array(1, $userRoles) || in_array(2, $userRoles))  
             <a href="{{ route('userSubjects.create') }}" class="btn btn-sm btn-primary">Crear Nueva</a>
        @endif
        <div class="card-body">
        @php
                $headers = ['ID', 'ID_PROFESOR', 'ID_ASIGNATURA', 'DIAS', 'HORAS'];
            @endphp
            <x-table :headers="$headers">
                <tbody>
                    @forelse($user_subject as $user_subjects)
                        <tr>
                            <td>{{ $user_subjects->id }}</td>
                            <td>{{ $user_subjects->profesor_id }}</td>
                            <td>{{ $user_subjects->subject_id }}</td>
                            <td>{{ $user_subjects->day }}</td>
                            <td>{{ $user_subjects->hour }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">There are no user_subjects.</td>
                        </tr>
                    @endforelse
                </tbody>
            </x-table>
        </div>
    </div>
</div>
@endsection
