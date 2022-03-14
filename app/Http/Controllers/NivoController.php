<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NivoController extends Controller
{
    public function index()
    {
        return view('dropdown-home.nivo', [
            "title" => "Nivo"
        ]);
    }
}
