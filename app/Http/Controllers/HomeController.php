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
        return view('index/panel');
    }
    public function productList()
    {
        return view('panel/productList');
    }
    public function productCreate(){
        $property = TypeProperty::all();
        $operation = Operation::all();
        return view('panel/productCreate', [
            'property' => $property,
            'operation' => $operation,
        ]);
    }
    public function productEdit(){
        $property = TypeProperty::all();
        $operation = Operation::all();
        return view('panel/productEdit', [
            'property' => $property,
            'operation' => $operation,
        ]);
    }
}
