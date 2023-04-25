<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use File;

class FileController extends Controller
{
    public function getFile(){
        $path = public_path().'/assets/pexels-photo-4709848.jpeg';
        if (file_exists($path)) {
            return response()->file($path);
        } else {
            return response()->json(['error' => 'File not found'], 404);
        }
        
    }
}