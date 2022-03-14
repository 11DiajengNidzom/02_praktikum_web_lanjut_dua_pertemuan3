<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallerySimpleController extends Controller
{
    public function index(){
        return view('dropdown-galleries.gallery-simple',[
            "title" => "Gallery Simple"
        ]);
    }
}
