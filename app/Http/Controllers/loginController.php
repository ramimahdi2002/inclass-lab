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

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // If no user is found, redirect back with an error message
        if (!$user) {
            return redirect()->back()->withInput()->withErrors(['email' => 'User not found']);
        }

        // Check if the user is an Admin and the password is correct
        if ($user->role === 'Admin' && Hash::check($request->password, $user->password)) {
            return redirect()->route('tasks.create');
        } else {
            // Redirect back with an error message for incorrect credentials
            return redirect()->back()->withInput()->withErrors(['password' => 'Invalid password']);
        }
    }
}
