<?php

use Illuminate\Support\Facades\Route;

//for controller -> so that we can controller
use App\Http\Controllers\UserController;

//invoke controller
use App\Http\Controllers\HelloController;

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

Route::get('/redirectroute', function() {
    return redirect() -> away('https://www.google.com');
});

//Attaching header
Route::get('/hom', function() {
    return response('Hello this is laravel', 200) -> header('Content-Type', 'text/plain');
});


//multiple headers
Route::get('/multipleheaders', function() {
    return response('Hello this is laravel', 200)
        ->header('Content-Type', 'text/plain')
        ->header('X-Custom-Header', 'CustomValue')
        ->header('X-Another-Header', 'AnotherValue');
});

//json data
Route::get('/jsondata', function() {
    $data = [
        'name' => 'Ajay Kumar',
        'reg_no' => '2023CSE001',
        'course' => 'B.Tech CSE',
        'year' => '3rd Year'
    ];

    return response()->json($data)
    ->header('X-Custom-Header', 'CustomValue')
    ->header('X-Another-Header', 'AnotherValue')
    ->header('Content-Type', 'application/json')
    ->setStatusCode(200);
});

//views with header
Route::get('/viewwithheader', function() {
    return response()->view('test1', ['name' => 'Ajay Kumar'])
    ->header('X-Custom-Header', 'CustomValue')
    ->header('X-Another-Header', 'AnotherValue')
    ->header('Content-Type', 'text/html')
    ->setStatusCode(200);
});


//working with cookies
Route::get('/setcookie', function() {
    return response('Cookie has been set')
    ->cookie('username', 'Ajay Kumar', 60); // Cookie valid for 60 minutes
});




//controller

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'show']);


Route::get('/hello', HelloController::class);



//invoke controller route
Route::get('/x', HelloController::class);


//student controller

Route::get('/student', [StudentController::class, 'showStudentDetails']);

Route::get('/student/form', function() {
    return view('Studentform');
});

Route::post('/student/store', [StudentController::class, 'store']);


//registration form
Route::get('/form', function() {
    return view('form');
});

Route::post('/submit-form', [StudentController::class, 'submit']);

//layout
Route::get('/layout-page', function() {
    return view('layout');
});

//home page
Route::get('/home-page', function() {
    return view('home');
});


//url generation
//current url
Route::get('/current', function(){
    return url()->current();
});

//framework url
Route::get('/framework', function() {
    echo url('/about2');
    echo "<br>";
    echo url('/contact2');
});

Route::get('/about2', function() {
    return "This is the about page.";
});

Route::get('/contact2', function() {
    return "This is the contact page.";
});


//ASSETS URL
Route::get('/assets', function() {
    return '<img src="' . asset('image/scrn-img.jpg') . '" alt="Sample Image">';
});


//form route
Route::get('/form', function() {
    return view('form');
});


//Student form route
Route::get('/studentform', function() {
    return view('Studentform');
});


//Domain routing
Route::domain('admin.lvh.me')->group(function() {
    Route::get('/admin', function() {
        return "Welcome to the admin dashboard!";
    });
});

//Dynamic Subdomain Routing
Route::domain('{account}.lvh.me')->group(function() {
    Route::get('/admin', function($account) {
        return "Welcome to the dashboard of account: " . $account;
    });
});



//we are having an array of object which is having the url of the different images,
//whenever user will click the url of the image, it will display the image in different
//route

//step 1 - create controller first using command -> php artisan make:controller ImageController
//step 2 - create a method in the controller which will return the view of the image
//step 3 - create a view for the image -> destination.blade.php
//step 4 - create a route for the image and return the view of the image in the route

use App\Http\Controllers\ImageController;


Route::get('/images', function() {
    $images = [
        ['name' => 'Image 1', 'url' => url('/image1')],
        ['name' => 'Image 2', 'url' => url('/image2')],
        ['name' => 'Image 3', 'url' => url('/image3')],
    ];
    return view('images', compact('images'));
}); 

// ARRAY AND IMAGES
Route::get('destinations', [ImageController::class, 'index']);
Route::get('destination/{id}', [ImageController::class, 'show']);


//Task - list a course namae like Btech, BBA, BCA, MBA, MTech in a 
//view and whenever user click on the course name, it will display 
// the fee of the course in different route. Create a controller for 
// the course and create a view for the course details. Use array 
// to store the course details and display the details in the view.


//step to do this task
//1. create a controller using command -> php artisan make:controller CourseController
//2. create a method in the controller which will return the view of the course details
//3. create a view for the course details -> course.blade.php
//4. create a route for the course and return the view of the course details in the route

use App\Http\Controllers\CourseController;

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);