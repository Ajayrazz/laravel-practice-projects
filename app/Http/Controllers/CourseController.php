<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    private $courses = [
        1 => ['name' => 'B.Tech CSE', 'duration' => '4 years', 'fee' => 50000],
        2 => ['name' => 'BBA', 'duration' => '3 years', 'fee' => 30000],
        3 => ['name' => 'BCA', 'duration' => '3 years', 'fee' => 25000],
        4 => ['name' => 'MBA', 'duration' => '2 years', 'fee' => 60000],
        5 => ['name' => 'M.Tech', 'duration' => '2 years', 'fee' => 55000],
    ];

    public function index() {
        return view('courses', ['courses' => $this->courses]);
    }

    public function show($id) {
        $courses = $this->courses;
        if(isset($courses[$id])){
            $course = $courses[$id];
            return view('course', ['course' => $course]);
        } else {
            return "Course not found.";
        }
    }
}
