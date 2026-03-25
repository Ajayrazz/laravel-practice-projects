<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        return "This is the invokable controller";
    }
}




//command to make controller
//php artisan make:controller HelloController --invokable