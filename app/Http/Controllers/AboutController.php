<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return "NIM   : 2041720171 <br> 
                Nama  : Adika Ahmad Hanif Nazhir <br>
                Kelas : TI-2B";
    }
}
