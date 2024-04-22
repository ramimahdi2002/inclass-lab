{{-- resources/views/movies/show.blade.php --}}

@extends('layouts.master')

@section('content')
<form class="container" method="get" action="{{ route('getMovies') }}">
    <img src="{{ asset($movie->imgPath) }}" style="width: 120px;"/>
    <h1>{{ $movie->title }}</h1>
    <p><strong>Year:</strong> {{ $movie->production_year }}</p>
    <p><strong>Duration:</strong> {{ $movie->duration }} minutes</p>
    <p><strong>Genre:</strong> {{ $movie->genre }}</p>
    <p><strong>Synopsis:</strong> {{ $movie->synopsis }}</p>

   
    
</form>
@endsection
