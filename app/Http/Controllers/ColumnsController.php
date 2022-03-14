<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColumnsController extends Controller
{
    public function index(){
        return view ('columns',[
            "title" => "Columns"
        ]);
    }
}
