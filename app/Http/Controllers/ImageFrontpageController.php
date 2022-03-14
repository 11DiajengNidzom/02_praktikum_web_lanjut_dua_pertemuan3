<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageFrontpageController extends Controller
{
    public function index(){
        return view('image-frontpage',[
            "title" => "Image Frontpage"
        ]);
    }
}
