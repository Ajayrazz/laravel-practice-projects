<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/basic', function () {
    return  "Hello world";
});

Route::get('/name', function() {
    $name1 = "ABC";
    $name2 = "XYZ";

    echo "The name for the first person is".$name1."<br>";
    echo "The name for the second persone is ".$name2;
});

Route::get('/details', function(){
    return ['name' => 'ABC', 'occupation' => 'developer'];
});

Route::get('/stuff', function() {
    $product = [
        'name' => 'Laptop',
        'price' => 1000,
        'quantity' => 5
    ];
    return $product;  
});

// Route Parameter

Route::get('/add/{num1}/{num2}', function($num1, $num2) {
    $sum = $num1 + $num2;
    return "The sum of ".$num1." and ".$num2." is: ".$sum;
});



Route::get('/person1/{name?}', function($name = "Guest") {
    return "Hello, ".$name."!";
});



Route::get('/welcome/{name}', function ($name) {
    return "Welcome, " . $name . "!";
});

Route::get('/grade/{marks}', function ($marks) {

    if ($marks >= 90) {
        return "Grade: A";
    } elseif ($marks >= 75) {
        return "Grade: B";
    } elseif ($marks >= 50) {
        return "Grade: C";
    } else {
        return "Grade: D";
    }

});

//working with views
Route::get('/greet', function () {
    return view('greet');
});

//passing data to views
Route::view('/pdv', 'greet', ['name' => 'John Doe']);

//Redirecting routes
Route::get('/redirect', function () {
    return view('test1');
}) -> name('abc');


Route::get('/test2', function () {
    return view('test2');
}) -> name('abcd');

Route::redirect('/test2-redirect', '/test2');

//Redirect with parameter involved
Route::get('/redirect2/{name}', function($name) {
    return $name;
});

Route::redirect('/testredirect2/{name}', '/redirect2/{name}');

//with null
Route::get('/redirect3/{name?}', function($name = null) {
    return $name;
}) -> name('redirect3');

Route::get('/testredirect3/{name?}', function() {
    return redirect()->route('redirect3', ['name' => 'John Doe']);
});


//working with parameters, views and redirection
Route::get('/welcome2/{name}/{profession?}', function($name = "Ashu", $profession = "Developer") {
    return view('welcome2', ['name' => $name, 'profession' => $profession]);
}) -> name('welcome2');

Route::redirect('/welcome2-redirect/{name}/{profession?}', '/welcome2/{name}/{profession?}');


//Task - Create a route '/StudentDetails', display the details of the student by using
//views. Redirect the route to '/StudentDetails' to a new route 'matchDetails'
//Name, Registration Number, Course, Year of Study

// Redirect route
Route::redirect('/StudentDetails', '/matchDetails');

// Main route
Route::get('/matchDetails', function () {
    $student = [
        'name' => 'Ajay Kumar',
        'reg_no' => '2023CSE001',
        'course' => 'B.Tech CSE',
        'year' => '3rd Year'
    ];

    return view('student', compact('student'));
});

//Redirecting to externaml URL
Route::redirect('/google', 'https://www.google.com');