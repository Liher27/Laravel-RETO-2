@extends(request()->query('layout', 'layouts.admin')) 
@section('content')
@php
    $headers = ['ID', 'ID_PROFESOR', 'ID_ASIGNATURA', 'DIAS', 'HORAS'];
@endphp

<x-table :headers="$headers">
    <tbody>
        @forelse($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->profesor_id }}</td>
                <td>{{ $subject->subject_id }}</td>
                <td>{{ $subject->day }}</td>
                <td>{{ $subject->hour }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">There are no user_subjects.</td>
            </tr>
        @endforelse
    </tbody>
</x-table>

@endsection