<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColumnsController extends Controller
{
    public function index(){
        return view ('dropdown-pages.columns',[
            "title" => "Columns"
        ]);
    }
}
