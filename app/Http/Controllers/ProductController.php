<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Models\Property;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request){
        //validación
        /* $validate = $this->validate($request, [
            //Slect
            'tipoPropiedad' => 'required|in:Casa,Departamento,Galpon,Local,Terreno',
            'tipoOperacion' => 'required|in:Alquiler,Venta',
            //String
            'adress' => 'required|string|min:3|max:200',
            'dimension' => 'nullable|string|min:3|max:200',
            //Number
            'adressNumber' => 'required|numeric|min:3|max:200',
            'price' => 'required|numeric|min:3|max:200',
            'room' => 'nullable|numeric|min:3|max:200',
            'bathroom' => 'nullable|numeric|min:3|max:200',
            //Image
            'image[]' => 'required|mimes:jpg,jpeg,png,gif',
        ], [
            //image
            'image[].required' => 'hay archivos que no son imagenes o fomato no compatible!',
            //Select
            'tipoPropiedad.required' => 'Campo obligatorio',
            'tipoPropiedad.in' => 'Algo salió mal',
            //Select
            'tipoOperacion.required' => 'Campo obligatorio',
            'tipoOperacion.in' => 'Algo salió mal',
            //String
            'adress.required' => 'Campo obligatorio',
            'adress.min' => 'Tiene que contener mas de 3 carcteres',
            'adress.max' => 'No puede superar los 200 carcteres',
            //Number
            'adressNumber.required' => 'Campo obligatorio',
            'adressNumber.numeric' => 'Solo numeros enteros',
            'adressNumber.min' => 'Tiene que contener mas de 3 carcteres',
            'adressNumber.max' => 'No puede superar los 200 carcteres',
            //Number
            'price.required' => 'Campo obligatorio',
            'price.numeric' => 'Solo numeros enteros',
            'price.min' => 'Tiene que contener mas de 3 carcteres',
            'price.max' => 'No puede superar los 200 carcteres',
            //Number
            'room.numeric' => 'Solo numeros enteros',
            'room.min' => 'Tiene que contener mas de 3 carcteres',
            'room.max' => 'No puede superar los 200 carcteres',
            //Number
            'bathroom.numeric' => 'Solo numeros enteros',
            'bathroom.min' => 'Tiene que contener mas de 3 carcteres',
            'bathroom.max' => 'No puede superar los 200 carcteres',
            //String
            'dimension.string' => '',
            'dimension.min' => 'Tiene que contener mas de 3 carcteres',
            'dimension.max' => 'No puede superar los 200 carcteres',
        ]); */
        //Almacenar imagenes en un array
        if($request->file('image')){
            $fileImages =  $request->file('image');
            $image_paths = [];
            foreach ($fileImages as $file) {
                $image_paths[] = $file->getClientOriginalName();
            }
        }
        //Guardar datos Input
        $type_property = $request->input('tipoPropiedad');
        $type_operation = $request->input('tipoOperacón');
        $adress = $request->input('adress');
        $adressNumber = $request->input('adressNumber');
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
        //Guardar Property
        $property = new Property();
        $property->type_property_id = $type_property;
        $property->status_id = 1;
        $property->operation = $type_operation;
        $property->adress = $adress;
        $property->adress_number = $adressNumber;
        $property->price = $price;
        $property->maps = $maps;
        $property->main_image = $image_paths[0];



        //subiir imagen
        // foreach ($image_paths as $img) {
        //     if($img){
        //         $image_name = time().$image
        // }

        

        var_dump($property);
        die();
        return view('index/sale');//carpeta y archivo
    }
}
