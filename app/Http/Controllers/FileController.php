<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240', // Max file size: 10MB
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads');

        return response()->json(['message' => 'File uploaded successfully', 'path' => $path], 200);
    }
}
