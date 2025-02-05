@extends(request()->query('layout', 'layouts.app')) 
@section('content')
<div class="container">
  <div class="card mt-5">
    @php
    $headers = ['ID', 'Nombre del Curso'];
    @endphp

    <x-table :headers="$headers">
      <tbody>
        <tr>
          <td>{{ $course->id }}</td>
          <td>{{ $course->course_name }}</td>
      </tbody>
    </x-table>
    @endsection
  </div>