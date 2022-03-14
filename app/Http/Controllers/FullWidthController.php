<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullWidthController extends Controller
{
    public function index(){
        return view('dropdown-pages.full-width',[
            "title" => "Full Width"
        ]);
    }
}
