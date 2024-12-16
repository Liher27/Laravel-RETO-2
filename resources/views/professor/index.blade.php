@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Alumnos</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>15:00-16:00</td>
                            <td>16:00-17:00</td>
                            <td>17:00-18:00</td>
                            <td>18:30-19:30</td>
                            <td>19:30-20:30</td>
                            <td>20:30-21:30</td>
                        </tr>
                        <tr>
                            <td colspan="3">There are no users.</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection