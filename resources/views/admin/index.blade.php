@extends(request()->query('layout', 'layouts.admin')) 
@section('content')
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
                    @empty
                        <tr>
                            <td colspan="5">There are no users.</td>
                        </tr>
                    @endforelse
                </tbody>
            </x-table>


@endsection