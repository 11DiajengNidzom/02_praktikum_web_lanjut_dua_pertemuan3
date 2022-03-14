<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageFrontpageController extends Controller
{
    public function index(){
        return view('dropdown-home.image-frontpage',[
            "title" => "Image Frontpage"
        ]);
    }
}
