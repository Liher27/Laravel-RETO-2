<<<<<<< Updated upstream

@extends('layouts.app')

@section('content')
<ul>
  @foreach ($user_subjects as $user_subject)
    <li>
      <a href="{{route('userSubjects.show',$user_subject)}}"> {{$user_subject->id}}</a>
    </li>
  @endforeach
</ul>
@endsection


=======
<!DOCTYPE html>
<html>
<head>
    <title>Roles</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Roles</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol name</th>
                        <th>Rol name</th>
                        <th>day</th>
                        <th>Rol name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($user_subjects as $user_subjects)
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
            </table>
        </div>
    </div>
</div>

</body> 
</html>
>>>>>>> Stashed changes
