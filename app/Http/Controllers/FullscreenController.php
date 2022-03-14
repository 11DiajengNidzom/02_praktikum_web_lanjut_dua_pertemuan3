<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullscreenController extends Controller
{
    public function index()
    {
        return view('dropdown-home.fullscreen-gallery', [
            "title" => "Fullscreen Gallery"
        ]);
    }
}
