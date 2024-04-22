<?php

namespace App\Http\Controllers;

use App\Models\doctorAvailibility;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class DoctorsController extends Controller
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
    public function addDr(Request $request)
    {
        $doc = new Doctors();
        $doc->name = $request->name;
        $doc->phoneNumber = $request->phoneNumber;
        $doc->specialty = $request->specialty;

        $path =  $request->file('image')->store('public/myImages');
        $replaced = Str::replace('public', 'storage', $path);
        $doc->image_url = $replaced;
        $doc->save();

        $ava = new doctorAvailibility();
        $ava->start_date = $request->startdate;
        $ava->end_date = $request->enddate;
        $ava->doctor_id = $doc->id;
        $ava->save();
        

        return redirect()->route('listDr');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
