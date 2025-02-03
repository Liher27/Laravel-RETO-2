@extends(request()->query('layout', 'layouts.app')) 
@section('content')
<div class="container">
<div class="d-flex justify-content-end">
                <div class="card-body">
                    @php
                        $headers = ['ID', 'Name', 'Registration', 'Año escolar'];
                    @endphp
                    <x-table :headers="$headers">
                        <tbody>
                        <tr>
                            <td>{{ $registrations->id}}</td>
                            <td>{{ $registrations->user_id}}</td>
                            <td>{{ $registrations->registration_date }}</td>
                            <td>{{ $registrations->school_year }}</td>
                        </tr>
                </tbody>
            </x-table>
@endsection
</div>