<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "NIM   : 2041720171 <br> 
                Nama  : Adika Ahmad Hanif Nazhir <br>
                Kelas : TI-2B";
    }

    public function articles($id){
        return "Halaman Artikel dengan id ".$id;
    }
}