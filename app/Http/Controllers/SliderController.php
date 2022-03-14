<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('ei-slider', [
            "title" => "EI Slider"
        ]);
    }
}
