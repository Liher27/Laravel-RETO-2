@extends('layouts.app')
@section('content')
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Matriculas</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>user id</th>
                        <th>Dia de registro</th>
                        <th>Dia escolar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($registrations as $registrations)
                        <tr>
                            <td>{{ $registrations->id }}</td>
                            <td>{{ $registrations->user_id }}</td>
                            <td>{{ $registrations->registration_date }}</td>
                            <td>{{ $registrations->school_year }}</td>
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

</body> 
</html>
@endsection