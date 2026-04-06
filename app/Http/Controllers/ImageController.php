<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    private $destinations = [
        1 => ['name' => 'Paris', 'image' => 'scrn-img.png'],
        2 => ['name' => 'New York', 'image' => 'scrn-img.jpg'],
        3 => ['name' => 'Tokyo', 'image' => 'scrn-img.png'],
    ];

    public function index(){
        return view('destinations', ['destinations' => $this->destinations]);
    }

    public function show($id){
        $destinations = $this->destinations;
        if (isset($destinations[$id])) {
            $destination = $destinations[$id];
            return view('destination', ['destination' => $destination]);
        } else {
            return "Destination not found.";
        }
    }
}
