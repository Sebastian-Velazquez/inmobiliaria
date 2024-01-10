<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\TypeProperty;
use App\Models\Operation;
use App\Models\Status;
use App\Models\Image;
use App\Models\City;

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
        $property = Property::where('status_id','!=', 3)
        ->get();
        $status = Status::all();
        return view('panel/productList',[
            'property' => $property,
            'status' => $status,
        ]);
    }

    public function productCreate(){
        $typeProperty = TypeProperty::all();
        $operation = Operation::all();
        $city = City::orderBy('name', 'asc')->get();

        return view('panel/productCreate', [
            'typeProperty' => $typeProperty,
            'operation' => $operation,
            'city' => $city,
        ]);
    }

    public function viewEdit(Request $request){
        $property = Property::find($request->input('id'));
        if($property->status->id != 3){
            $typeProperty = TypeProperty::all();
            $operation = Operation::all();
            $city = City::orderBy('name', 'asc')->get();
            $images = Image::where('property_id', $property->id)->get();
            /* var_dump($images[0]->image_path);
            die(); */
            return view('panel/productEdit', [
                'typeProperty' => $typeProperty,
                'operation' => $operation,
                'property' => $property,
                'city' => $city,
                'images' => $images
            ],
        );
        }else{
            return redirect('panel');
        }
    }



    public function viewDelete(){
        $property = Property::where('status_id', 3)->get();
        return view('panel/productListDelete', [
            'property' => $property
        ]);
    }
    public function viewRestore(Request $request){
        $property = Property::find($request->input('id'));
        if($property->status->id == 3){
            $typeProperty = TypeProperty::all();
            $operation = Operation::all();
            $city = City::orderBy('name', 'asc')->get();
            $images = Image::where('property_id', $property->id)->get();
            /* var_dump($images[0]->image_path);
            die(); */
            return view('panel/productEdit', [
                'typeProperty' => $typeProperty,
                'operation' => $operation,
                'property' => $property,
                'city' => $city,
                'images' => $images
            ],
        );
        }else{
            return redirect('panel');
        }
        }
}
