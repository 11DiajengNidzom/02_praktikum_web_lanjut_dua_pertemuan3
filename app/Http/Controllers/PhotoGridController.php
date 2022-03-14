<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoGridController extends Controller
{
    public function index(){
        return view('photogrid',[
            "title" => "PhotoGrid"
        ]);
    }
}
