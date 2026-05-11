<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index(){
        $employees = DB::table('employees')->get();
        return view('employee-index', compact('employees'));
    }

    public function create(){
        return view('employee-create');
    }

    public function store(Request $request){
        DB::table('employees')->insert([
            'name' => $request->name,
            'department' => $request->department,
            'salary' => $request->salary
        ]);

        return redirect('/employees');
    }

    //edit
    public function edit($id){
        $employee = DB::table('employees')->where('id', $id)->first();
        return view('employee-edit', compact('employee'));
    }

    //update data
    public function update(Request $request, $id){
        DB::table('employees')->where('id', $id)->update([
            'name' => $request->name,
            'department' => $request->department,
            'salary' => $request->salary
        ]);

        return redirect('/employees');
    }

    //delete
    public function delete($id){
        DB::table('employees')->where('id', $id)->delete();
        return redirect('/employees');  
    }
}