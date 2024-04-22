@extends('layouts.master')

@section('customcss')



@endsection


@section('content')
<form method="POST" action="{{ route('addMovie') }}" enctype="multipart/form-data">
    @csrf
    <fieldset>
        <legend>Movie Details</legend>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="imgPath">Movie File:</label>
            <input type="file" id="imgPath" name="imgPath">
        </div>
        <div>
            <label for="production_year">Production Year:</label>
            <input type="text" id="production_year" name="production_year">
        </div>
        <div>
            <label for="thumbnail">Thumbnail URL:</label>
            <input type="text" id="thumbnail" name="thumbnail">
        </div>
        <div>
            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration">
        </div>
        <div>
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre">
        </div>
    </fieldset>
    <fieldset>
        <legend>Synopsis</legend>
        <div>
            <label for="synopsis">Synopsis:</label>
            <textarea id="synopsis" name="synopsis"></textarea>
        </div>
    </fieldset>
    <div>
        <button type="submit">Add Movie</button>
    </div>
</form>

@endsection