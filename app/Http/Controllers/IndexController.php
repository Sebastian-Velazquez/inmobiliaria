<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Models\Image;
use App\Models\Message;
use App\Models\Operation;
use App\Models\TypeProperty;

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
        $operation = Operation::all();
        $typeProperty = TypeProperty::all();

        return view('index/index',[
            'propiedadDestacado' => $propertyOut,
            'PropiedadNuevo' => $PropertyNew,
            'operacion' => $operation,
            'tipoPropiedad' => $typeProperty
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
    //mostrar Contacto
    public function contact(){
        return view('index/contact');//carpeta y archivo
    }
    //mostrar Comprar y Alquilar
    public function buyRent(){
        $operation = Operation::all();
        $typeProperty = TypeProperty::all();
        $propertyAll = Property::where('status_id', '!=', 3)
            ->orderBy('adress', 'asc')
            ->paginate(6); // Número de elementos por página (ajústalo según tus necesidades)
        $PropertyNew = Property::orderBy('created_at', 'desc')
            ->where('status_id', '!=', 3)
            ->limit(4)
            ->get();

        return view('index/buy-rent',[
            'propiedades' => $propertyAll,
            'PropiedadNuevo' => $PropertyNew,
            'operacion' => $operation,
            'tipoPropiedad' => $typeProperty
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
        // Botones de WhatsApp para editar información 
        $propertyId = route('productDetail', ['id' => $property->id]);

        $message = "Hola, quiero hacer una consulta sobre: ".$property->adress.' '.$property->adress_number.' en '. $property->operations->name ;
        $whatsappLink = "https://api.whatsapp.com/send?phone=543402552259&text=" . urlencode("{$propertyId}\n\n{$message}");

        $images = Image::where('property_id', $property->id)->get();
        $PropertySimilar = Property::where('type_property_id',  $property->type_property_id)
            ->where('status_id', '!=', 3)
            ->limit(4)
            ->get();
            $operation = Operation::all();
            $typeProperty = TypeProperty::all();
        //Cargar vista en el contador
        $property->view_property += 1;
        $property->update();

        return view('index/productDetail',[
            'PropiedadSimilar' => $PropertySimilar,
            'propiedad' => $property,
            'imagen' => $images,
            'whatsappLink' => $whatsappLink,
            'operacion' => $operation,
            'tipoPropiedad' => $typeProperty
        ]);//carpeta y archivo
    }

    public function imagePath($filename){//ruta de imagen
        $file = Storage::disk('images')->get($filename);
        return new Response($file,200);
    }

    public function message(Request $request){
        $validate = $this->validate($request, [
            //String
            'name' => 'required|string|min:3|max:200',
            'question' => 'required|string|min:3|max:200',
            //Email
            'email' => 'required|email',
            ],[
            //String
            'name.required' => 'Campo obligatorio',
            'name.min' => 'Tiene que contener mas de 3 carcteres',
            'name.max' => 'No puede superar los 200 carcteres',
            //String
            'question.required' => 'Campo obligatorio',
            'question.min' => 'Tiene que contener mas de 3 carcteres',
            'question.max' => 'No puede superar los 200 carcteres',
            //Email
            'email.required' => 'El campo es obligatorio'
        ]);
        //guardar reques
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('question');
        $id=  $request->input('id');

        //guardar 
        $messages = new Message();
        $messages->name = $name;
        $messages->email = $email;
        $messages->phone_number = $phone;
        $messages->message = $message;
        $messages->status = 0;
        $messages->save();
        if($id){
            return redirect()->route('productDetail',['id' =>$id])->with([
                'message' => 'Mensaje ENVIADO!'
            ]);
        }else{
            return redirect()->route('contact')->with([
                'message' => 'Mensaje ENVIADO!'
            ]);
        }
    }
}
