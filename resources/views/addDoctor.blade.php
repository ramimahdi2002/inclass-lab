@extends('layouts.master')

@section('customcss')



@endsection


@section('content')
<form method="POST" action="{{ route('storeDoctor') }}"  enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="title" name="name">

    <label for="image">Image:</label>
    <input type="file" id="image" name="image">

    <label for="specialty">Specialty:</label>
    <input type="input" id="specialty" name="specialty">

    <label for="phoneNumber">phone Number:</label>
    <input type="text" id="phoneNumber" name="phoneNumber">


    <input type="datetime-local" name="startdate" placeholder="Start Date">
    <input type="datetime-local" name="enddate" placeholder="End Date">

        
        <form><button>add Doctor</button></form>

</form>

@endsection