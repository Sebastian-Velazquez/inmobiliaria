<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //mostrar sobre nosotros
    public function about(){
        return view('about');//carpeta y archivo
    }
}
