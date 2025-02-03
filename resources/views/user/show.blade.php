@extends(request()->query('layout', 'layouts.app')) 
@section('content')
<div class="container">
  <div class="card mt-5">
    @php
    $headers = ['ID', 'Name', 'Email', 'Direccion', 'Dni', 'Rol'];
    @endphp

    <x-table :headers="$headers">
      <tbody>
        <tr>
          <td>{{ $users->id }}</td>
          <td>{{ $users->name }}</td>
          <td>{{ $users->email }}</td>
          <td>{{ $users->direction }}</td>
          <td>{{ $users->DNI }}</td>
          <td>@foreach ($users->roles as $role)
        {{ $role->role_name }}
        </td>
      @endforeach
      </tbody>
    </x-table>
    @endsection
  </div>