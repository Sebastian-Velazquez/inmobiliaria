<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index/index');//carpeta y archivo
    }
    //mostrar sobre nosotros
    public function about(){
        return view('index/about');//carpeta y archivo
    }
    //mostrar Agentes
    public function agents(){
        return view('index/agents');//carpeta y archivo
    }
    //mostrar Blog
    /* public function blog(){
        return view('index/blog');//carpeta y archivo
    } */
    //mostrar Contacto
    public function contact(){
        return view('index/contact');//carpeta y archivo
    }
    //mostrar Comprar y Alquilar
    public function buyRent(){
        return view('index/buy-rent');//carpeta y archivo
    }
    //mostrar Vender
    public function sale(){
        return view('index/sale');//carpeta y archivo
    }
    //mostrar Detalle de producto
    public function productDetail(){
        return view('index/productDetail');//carpeta y archivo
    }
}
