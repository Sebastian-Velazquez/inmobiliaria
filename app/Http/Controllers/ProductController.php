<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //mostrar Vender
    /* public function sale(){
        return view('index/sale');//carpeta y archivo
    } */
}
