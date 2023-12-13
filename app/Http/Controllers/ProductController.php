<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request){
        //Almacenar imagenes en un array
        $fileImages =  $request->file('image');
        $image_paths = [];
        foreach ($fileImages as $file) {
            $image_paths[] = $file->getClientOriginalName();
        }
        //Guardar datos Input
        $type_propertie = $request->input('tipoPropiedad');
        $type_operation = $request->input('tipoOperacón');
        $adress = $request->input('adress');
        $price = $request->input('price');
        $dimension = $request->input('dimension');
        $room = $request->input('room'); //Habitaciones
        $bathroom = $request->input('bathroom'); //Baños
        $dining_room = $request->input('diningRoom') ? $request->input('diningRoom') : 0; //Comedor
        $yard = $request->input('yard') ? $request->input('yard') : 0; //Patio
        $pool = $request->input('pool') ? $request->input('pool') : 0; //Piscina
        $garage = $request->input('garage') ? $request->input('garage') : 0; 
        $gas = $request->input('gas') ? $request->input('gas') : 0; 
        $expenses = $request->input('expenses') ? $request->input('expenses') : 0; 
        $kitchen = $request->input('kitchen') ? $request->input('kitchen') : 0; 
        $maps = $request->input('maps');
        $description = $request->input('description');
        var_dump($image_paths);
        die();
        return view('index/sale');//carpeta y archivo
    }
}
