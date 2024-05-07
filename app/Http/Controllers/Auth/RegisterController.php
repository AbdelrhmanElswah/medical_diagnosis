<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('website.signup');
    }

    public function register(Request $request)
    {
        // Validation rules for the registration form
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ];

        // Validate the request data
        $request->validate($rules);

        // Create a new user using the provided data
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        
        Session::flash('password_length_error', 'Password must be at least 8 characters long.');

        // Redirect the user after successful registration
        return redirect()->route('login')->with('success', 'Registration successful. Welcome, ' . $user->name . '!');
    }

}
