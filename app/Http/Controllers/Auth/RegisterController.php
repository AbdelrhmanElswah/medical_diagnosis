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
            'age' => 'nullable|integer|min:0',
            'location' => 'nullable|string|max:255',
            'blood_type' => 'nullable|string|max:3',
        ];

        // Validate the request data
        $request->validate($rules);

        // Create a new user using the provided data
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'age' => $request->input('age'), // Optional
            'location' => $request->input('location'), // Optional
            'blood_type' => $request->input('blood_type'), // Optional
        ]);

        Session::flash('success', 'Registration successful. Welcome, ' . $user->name . '!');

        // Redirect the user after successful registration
        return redirect()->route('login');
    }
}

