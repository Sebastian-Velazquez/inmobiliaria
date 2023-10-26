<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //mostrar sobre nosotros
    public function index(){
        return view('index');//carpeta y archivo
    }
    //mostrar sobre nosotros
    public function about(){
        return view('about');//carpeta y archivo
    }
    //mostrar Agentes
    /* public function about(){
        return view('about');//carpeta y archivo
    } */
}
