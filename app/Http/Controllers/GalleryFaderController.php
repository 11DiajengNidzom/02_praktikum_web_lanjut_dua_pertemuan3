<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryFaderController extends Controller
{
    public function index(){
        return view('gallery-fader',[
            "title" => "Gallery Fader"
        ]);
    }
}