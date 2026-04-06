<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function showStudentDetails()
    {
        $student = [
            'name' => 'Ajay Kumar',
            'reg_no' => '2023CSE001',
            'course' => 'B.Tech CSE',
            'year' => '3rd Year'
        ];

        return view('student', compact('student'));
    }

    public function store(Request $request){
        $name = $request->input('username');
        $email = $request->input('email');

        return view('student', compact('name', 'email'));
    }

    public function submit(Request $request){
        // Validate the input
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $username = $request->input('username');
        $email = $request->input('email');

        return view('student', ['name' => $username, 'email' => $email]);
    }
}
