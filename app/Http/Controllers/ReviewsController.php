<?php

namespace App\Http\Controllers;

use App\Models\movie;
use App\Models\reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, $movieId)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'rating' => 'required|integer|min:1|max:5',
        //     'content' => 'required',
        // ]);

        $movie = movie::find($movieId);

      
        $review = new reviews;
        $review->title = $request->title;
        $review->rating = $request->rating;
        $review->content = $request->content;
        $review->movie_id = $movie->id;
        $review->save();

        // return 'ok';
        return redirect()->route('movies.show', $movieId)->with('review', $review);
    }

    /**
     * Display the specified resource.
     */
    public function show(reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reviews $reviews)
    {
        //
    }
}
