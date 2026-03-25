<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {
        return "this is the user controller";
    }

    public function show($id) {
        return "this is the user controller with id " . $id;
    }
}
