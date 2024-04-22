<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function checkRole(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

       
        $user = User::where('email', $request->email)->first();

        
        if ($user->role === 'Admin' && Hash::check($request->password, $user->password)) {
            return redirect()->route('addMovie');
            // return 'ok';
        }
        else {
            // return redirect()->route('listDr');
        }
    }
}
