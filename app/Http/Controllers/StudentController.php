<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3',
            'name' => 'required',
            'password' => 'required|min:6',
            'email' => 'required|email',
        ], [
            'username.required' => 'Username is required',
            'username.min' => 'Username must be at least 3 characters',

            'name.required' => 'Name is required',

            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',

            'email.required' => 'Email is required',
            'email.email' => 'Enter a valid email address',
        ]);

        return "Form submitted successfully";
    }
}