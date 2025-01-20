@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end">
                <div class="card-body">
                    @php
                        $headers = ['ID', 'Name', 'Registration', 'Año escolar','Acciones'];
                    @endphp
                    <x-table :headers="$headers">
                        <tbody>
                    @foreach($subject as $subjects)
                        <tr>
                            <td>{{ $subjects->id}}</td>
                            <td>{{ $subjects->course_id}}</td>
                            <td>{{ $subjects->subject_name }}</td>
                            <td>{{ $subjects->subject_hours }}</td>
                            @if(in_array(1, $userRoles) || in_array(2, $userRoles)) 
                                <td>
                            
                                    <a href="{{ route('registrations.edit', $registration) }}" class="btn btn-sm btn-primary">Editar</a>
                                    <form action="{{ route('registrations.destroy', $registration) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                        @endif
                        </tr>
                    @endforeach
                </tbody>
            </x-table>
@endsection