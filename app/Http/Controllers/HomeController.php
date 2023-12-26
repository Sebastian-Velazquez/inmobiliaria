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

        $property = Property::where('status_id','!=', 3)->get();
        $status = Status::all();
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
        if($property->status->id != 3){
            $typeProperty = TypeProperty::all();
            $operation = Operation::all();
            $images = Image::where('property_id', $property->id)->get();
            /* var_dump($images[0]->image_path);
            die(); */
            return view('panel/productEdit', [
                'typeProperty' => $typeProperty,
                'operation' => $operation,
                'property' => $property,
                'images' => $images
            ],
        );
        }else{
            return redirect('panel');
        }
    }
    public function imagePath($filename){//ruta de imagen
        $file = Storage::disk('images')->get($filename);
        return new Response($file,200);
    }
}
