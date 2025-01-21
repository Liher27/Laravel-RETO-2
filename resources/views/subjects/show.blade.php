@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end">
                <div class="card-body">
                    @php
                        $headers = ['ID', 'Name', 'Registration', 'Año escolar',];
                    @endphp
                    <x-table :headers="$headers">
                        <tbody>
                        <tr>
                            <td>{{ $subject->id}}</td>
                            <td>{{ $subject->course_id}}</td>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $subject->subject_hours }}</td>
                           
                        </tr>
                </tbody>
            </x-table>
@endsection