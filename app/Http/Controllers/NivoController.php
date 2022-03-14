<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NivoController extends Controller
{
    public function index(){
        return view('nivo',[
            "title" => "Nivo"
        ]);
    }
}
