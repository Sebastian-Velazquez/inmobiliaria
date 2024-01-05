<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Models\Image;

class IndexController extends Controller
{
    public function index(){
        $propertyOut = Property::where('stand_out','=', 1 )
            ->where('status_id', '!=', 3)
            ->get();
        $PropertyNew = Property::orderBy('created_at', 'desc')
            ->where('status_id', '!=', 3)
            ->limit(4)
            ->get();
        return view('index/index',[
            'propiedadDestacado' => $propertyOut,
            'PropiedadNuevo' => $PropertyNew
        ]);
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
        $propertyAll = Property::where('status_id', '!=', 3)
            ->orderBy('adress', 'asc')
            ->paginate(6); // Número de elementos por página (ajústalo según tus necesidades)
        $PropertyNew = Property::orderBy('created_at', 'desc')
            ->where('status_id', '!=', 3)
            ->limit(4)
            ->get();
        return view('index/buy-rent',[
            'propiedades' => $propertyAll,
            'PropiedadNuevo' => $PropertyNew
        ]);//carpeta y archivo
    }
    //mostrar Vender
    public function sale(){

        return view('index/sale');//carpeta y archivo
    }
    //mostrar Detalle de producto
    public function productDetail($id){
        $property = Property::where('status_id', '!=', 3)
            ->find($id);
        $images = Image::where('property_id', $property->id)->get();
        $PropertyNew = Property::orderBy('created_at', 'desc')
            ->where('status_id', '!=', 3)
            ->limit(4)
            ->get();
        return view('index/productDetail',[
            'PropiedadNuevo' => $PropertyNew,
            'propiedad' => $property,
            'imagen' => $images
        ]);//carpeta y archivo
    }

    public function imagePath($filename){//ruta de imagen
        $file = Storage::disk('images')->get($filename);
        return new Response($file,200);
    }
}
