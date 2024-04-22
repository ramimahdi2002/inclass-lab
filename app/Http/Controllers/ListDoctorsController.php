<?php

namespace App\Http\Controllers;

use App\Models\doctorAvailibility;
use App\Models\Doctors;
use App\Models\listDoctors;
use Illuminate\Http\Request;

class ListDoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $data = Doctors::all();
    return view('listDoctors')->with('doctors', $data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(listDoctors $listDoctors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(listDoctors $listDoctors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, listDoctors $listDoctors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(listDoctors $listDoctors)
    {
        //
    }
}
