<?php

namespace App\Http\Controllers;

use App\Models\movie;
use App\Models\reviews;
use Illuminate\Http\Request;
use Illuminate\Support\str;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('index')->with('movies', $movies);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie = new movie([
            'title' => $request->title, 
            'production_year' => $request->production_year,
            'thumbnail' => $request->thumbnail,
            'duration' => $request->duration,
            'genre' => $request->genre,
            'synopsis' => $request->synopsis,

            // $review = new reviews([
            //     'title' => $request->title,
            //     'rating' => $request->rating,
            //     'content' => $request->content,
            // ])

        ]);
        $path = $request->file('imgPath')->store('public/myImages');
        $path_to_store = Str::replace('public', 'storage', $path);
        
                
           
            $movie->imgPath= $path_to_store;


        $movie->save();
        // $review->save();
        return redirect()->route('movies.index');

    }
    
    public function searchMovie($id){
        $movie = movie::find($id);
        return $movie;

    }

    /**
     * Display the specified resource.
     */
    public function show(movie $id)
    {
        $movie = Movie::findOrFail($id);
        return view('show')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = movie::find($id);
        $data->delete();
        return redirect()->route('movies.index');
        
    }
}
