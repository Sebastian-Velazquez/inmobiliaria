<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
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
        return view('index/panel');
    }
    public function productList(){
        $property = Property::all();
        $status = Status::all();
        /* $dato = $property->operations;
        var_dump($dato->name); 
        die();*/
        return view('panel/productList',[
            'property' => $property,
            'status' => $status,
        ]);
    }
    public function productCreate(){
        $typeProperty = TypeProperty::all();
        $operation = Operation::all();
        return view('panel/productCreate', [
            'typeProperty' => $typeProperty,
            'operation' => $operation,
        ]);
    }
    public function viewEdit(Request $request){
        $property = Property::find($request->input('id'));
        $typeProperty = TypeProperty::all();
        $operation = Operation::all();
        $mainJson = $property->main_image;
       /*  var_dump($mainJson);
        die(); */
        return view('panel/productEdit', [
            'typeProperty' => $typeProperty,
            'operation' => $operation,
            'property' => $property,
        ],
        compact('mainJson')
    );
    }
}
