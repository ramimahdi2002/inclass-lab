@extends('layouts.master')

@section('content')
<div>
    <table>
        <tr>
            <th>Name</th>
            <th>Specialty</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Appointments</th>
        </tr>
        @foreach($doctors as $doctor)
    <tr>
        <td>{{ $doctor->name }}</td>
        <td>{{ $doctor->specialty }}</td>
        
        <td>{{ $doctor->doctorAvailibility->start_date }}</td>
        <td>{{  $doctor->doctorAvailibility->end_date }}</td>

        <td><a href="">Get Appointment</a></td>
        
    </tr>
@endforeach
    </table>
</div>
@endsection
