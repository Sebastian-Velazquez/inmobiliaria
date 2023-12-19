<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Image;
use App\Models\TypeProperty;
use App\Models\Operation;
use App\Models\Status;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function panelHome()
    {
        /* $images = Image::find(1);
        var_dump($images->property->adress);
        die(); */
        return view('index/panel'/* , [
            'images'=> $images
        ] */);
    }
    public function productCreate(){
        $property = TypeProperty::all();
        $operation = Operation::all();
        /* $arrayOperation = [];
        foreach ($operation as $ope) {
            $arrayOperation[] = $ope->name;
        } */
        /* var_dump($arrayOperation);
        die(); */
        return view('panel/productCreate', [
            'property' => $property,
            'operation' => $operation,
        ]);
    }
}
