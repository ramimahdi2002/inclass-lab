<?php

namespace App\Http\Controllers;

use App\Models\doctorAvailibility;
use App\Models\Doctors;
use Illuminate\Http\Request;

class DoctorAvailibilityController extends Controller
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
    public function store(Request $request)
    {
        // $dr = Doctors::all();
        // $schedule = new doctorAvailibility([
        //     'start_date' => $request->startdate,
        //     'end_date'=> $request->enddate,
        // ]);

        // $schedule->save();
        // return view('addSchedule')->with('dr', $dr);

    }

    /**
     * Display the specified resource.
     */
    public function show(doctorAvailibility $doctorAvailibility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doctorAvailibility $doctorAvailibility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doctorAvailibility $doctorAvailibility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctorAvailibility $doctorAvailibility)
    {
        //
    }
}
