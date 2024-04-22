@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Movies</h1>
 


    <table>
            <tr>
                <th>image</th>
                <th>title</th>
                <th>duration</th>
                <th>production_year</th>
                <th>synopsis</th>
            </tr>

            @foreach ($movies as $movie)
                <tr>
                    <td><img src="{{ $movie->imgPath }}"style="width: 100px; height: auto;"></td>
                    <td>{{ $movie->title }}</td>
                    <td>{{$movie->duration}}</td>
                    <td>{{$movie->production_year}}</td>
                    <td>{{ $movie->synopsis }}</td>
                    <td>
                        <a href="{{route('delete-movie', ['id'=>$movie->id])}}" >delete</a>
                        <a href="" >edit</a>
                    </td>
                        
                </tr>
            @endforeach


        </table>
</div>
@endsection
