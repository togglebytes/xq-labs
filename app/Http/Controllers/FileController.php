<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class FileController extends Controller
{
    public function gePdfFile(){
        $path = public_path().'\assets\download\Free_Guide_on_10_easy_ways_to_make_your_school_Video_Savvy.pdf';
        
        if (file_exists($path)) {
            return response()->file($path);
        } else {
            return response()->json(['error' => 'File not found'], 404);
        }
        
    }
}
