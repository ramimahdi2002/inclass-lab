@extends('layouts.master')

@section('customcss')



@endsection


@section('content')
<form method="POST" action="{{ route('addMovie') }}" enctype="multipart/form-data">
    @csrf
    <label for="title">title:</label>
    <input type="text" id="title" name="title">

    <label for="Movie">Movie:</label>
    <input type="file" id="imgPath" name="imgPath">

    <label for="production_year">production_year:</label>
    <input type="text" id="production_year" name="production_year">

    <label for="thumbnail">thumbnail:</label>
    <input type="input" id="thumbnail" name="thumbnail">

    <label for="duration">duration:</label>
    <input type="text" id="duration" name="duration">

    <label for="genre">genre:</label>
    <input type="text" id="genre" name="genre">

    
    <label for="synopsis">synopsis:</label>
    <input type="text" id="synopsis" name="synopsis">
        
        <form><button>add movie</button></form>

</form>

@endsection