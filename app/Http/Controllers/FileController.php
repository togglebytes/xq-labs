<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use File;

class FileController extends Controller
{
    public function getFile(){
        $path = public_path().'/assets/sample-download.pdf';
        $file = File::get($path);
        $response = Response::make($file, 200);
        $response->header('Content-Type', 'application/pdf');
        return $response;
        
       
        // if (file_exists($path)) {
        //     return response()->file($path);
        // } else {
        //     return response()->json(['error' => 'File not found'], 404);
        // }
        
    }
}
