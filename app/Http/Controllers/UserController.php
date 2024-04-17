<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('nextPage')->with('data',$data);
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
        
        $request->validate([
            // 'firstname' => 'required',
            // 'lastname' => 'required',
            // 'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6',
            // 'confirmPassword' => 'required|min:6',
            // 'gender'=> 'required'
        ]);

        $user = new User([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'confirmPassword' => $request->confirmPassword,
            'gender'=> $request->gender,
        ]);


        $user->save();

        return redirect()->route('list-users');
    
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
        $user = User::find($id);
        return view('editUser')->with('object', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $obj = User::find($id);
    if (!$obj) {
        return redirect()->route('list-users')->withErrors('User not found.');
    }

    $obj->email = $request->input('email');
    $obj->save();
    return redirect()->route('list-users');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('list-users');
    }
}
