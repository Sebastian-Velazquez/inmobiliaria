<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Http\File;
use Illuminate\Support\Facades\File;
use App\Models\Property;
use App\Models\Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request){
        //validación
        $validate = $this->validate($request, [
            //Slect
            'tipoPropiedad' => 'required|in:1,2,3,4,5',
            'tipoOperacion' => 'required|in:1,2',
            //String
            'adress' => 'required|string|min:3|max:200',
            'dimension' => 'nullable|string|min:3|max:200',
            //Number
            'adressNumber' => 'required|numeric|min:3',
            'adressNumber' => 'min:3',
            'price' => 'required|numeric|min:3',
            'price' => 'min:3',
            'room' => 'required|numeric',
            'bathroom' => 'required|numeric',
            //Image Array
            'image' => 'required|array|min:1',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif', // Permitir solo imágenes con extensiones específicas y un tamaño máximo de 2048 KB
            'main' => 'required|mimes:jpeg,png,jpg,gif',
            ],[
            //image
            'image.required' => 'Debe proporcionar al menos una imagen.',
            'image.*.image' => 'Debes seleccionar inmagenes',
            'image.*.mimes' => 'Las imagen debe ser de tipo jpeg, png, jpg o gif.',
            'main.required' => 'Debe proporcionar una imagen.',
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
            //String
            'dimension.min' => 'Tiene que contener mas de 3 carcteres',
        ]);
        //Almacenar imagenes en un array
        if($request->file('image')){
            $fileImages =  $request->file('image');
            $images_path = [];
            foreach ($fileImages as $file) {
                $images_path[] = $file;
            }
        }
        //Guardar datos Input
            $main = $request->file('main');
            $type_property = $request->input('tipoPropiedad');
            $type_operation = $request->input('tipoOperacion');
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
            $maps = $request->input('maps') ? $request->input('maps') : null;
            $description = $request->input('description');
        //Guardar Property
            $property = new Property();
            $property->type_property_id = $type_property;
            $property->status_id = 1;
            $property->operation_id = $type_operation;
            $property->adress = $adress;
            $property->adress_number = $adressNumber;
            $property->price = $price;
            $property->maps = $maps;
            $property->dimension = $dimension;
            $property->room_number = $room;
            $property->bathroom_number = $bathroom;
            $property->description = $description;
            $property->dining_room = $dining_room;
            $property->yard = $yard;
            $property->pool = $pool;
            $property->garage = $garage;
            $property->gas = $gas;
            $property->expenses = $expenses;
            $property->kitchen = $kitchen;
        //Subir Imagen Main
        if($main){
            $images_path_name = time().' - '.$main->getClientOriginalName();
            //Storage::disk('images')->put($images_path_name, file_get_contents($images_path[0]));
            Storage::disk('images')->put($images_path_name, File::get($main));//images es la carpeta en storage
            $property->main_image = $images_path_name;
        }
        $dato = $property->main_image;
        $property->save();
        //Guardar imagenes para el Detalle de la Propiedad
            $propertyImageMain = Property::where('main_image', $dato)->first();
            if($images_path){
                foreach ($images_path as $img) {
                    $images = new Image();
                    $images->property_id = $propertyImageMain->id;
                    $images_path_name = time().' - '.$img->getClientOriginalName();
                    Storage::disk('images')->put($images_path_name, File::get($img));//images es la carpeta en storage
                    $images->image_path = $images_path_name;
                    $images->save();
                }
            }
        return redirect()->route('list')->with([
            'message' => 'La propiedad fue cargada con exito!'
        ]);
    }

    public function edit(Request $request){
        $delete = Property::find($request->input('id'));
                    if ($delete->status_id == 3) {
            //validación
            $validate = $this->validate($request, [
                //Slect
                'tipoPropiedad' => 'required|in:1,2,3,4,5',
                'tipoOperacion' => 'required|in:1,2',
                //String
                'adress' => 'required|string|min:3|max:200',
                'dimension' => 'nullable|string|min:3|max:200',
                //Number
                'adressNumber' => 'required|numeric|min:3',
                'adressNumber' => 'min:3',
                'price' => 'required|numeric|min:3',
                'price' => 'min:3',
                'room' => 'required|numeric',
                'bathroom' => 'required|numeric',
                //Image Array
                // 'image' => 'required|array|min:1',
                // 'image.*' => 'image|mimes:jpeg,png,jpg,gif', // Permitir solo imágenes con extensiones específicas y un tamaño máximo de 2048 KB
                // 'main' => 'required|mimes:jpeg,png,jpg,gif',
                ],[
                //image
                // 'image.required' => 'Debe proporcionar al menos una imagen.',
                // 'image.*.image' => 'Debes seleccionar inmagenes',
                // 'image.*.mimes' => 'Las imagen debe ser de tipo jpeg, png, jpg o gif.',
                // 'main.required' => 'Debe proporcionar una imagen.',
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
                //String
                'dimension.min' => 'Tiene que contener mas de 3 carcteres',
            ]);
            //Almacenar imagenes de detalle en un array
            if($request->file('image')){
                $fileImages =  $request->file('image');
                $images_path = [];
                foreach ($fileImages as $file) {
                    $images_path[] = $file;
                }
            }else{
                $images_path = null;
            }
            //Guardar datos Input
                $id = $request->input('id');
                $main = $request->file('main') ? $request->file('main') : null;
                $type_property = $request->input('tipoPropiedad');
                $type_operation = $request->input('tipoOperacion');
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
                $maps = $request->input('maps') ? $request->input('maps') : null;
                $description = $request->input('description');
            //Guardar Property
                $property = Property::find($id);
                $property->type_property_id = $type_property;
                $property->status_id = 1;
                $property->operation_id = $type_operation;
                $property->adress = $adress;
                $property->adress_number = $adressNumber;
                $property->price = $price;
                $property->maps = $maps;
                $property->dimension = $dimension;
                $property->room_number = $room;
                $property->bathroom_number = $bathroom;
                $property->description = $description;
                $property->dining_room = $dining_room;
                $property->yard = $yard;
                $property->pool = $pool;
                $property->garage = $garage;
                $property->gas = $gas;
                $property->expenses = $expenses;
                $property->kitchen = $kitchen;
                $property->kitchen = $kitchen;
            //Subir Imagen Main Y El Imagen Main Anterior
                if($main != null){
                //eliminar imagen
                $propertyID = Property::find($id);
                    Storage::disk('images')->delete($propertyID->main_image);
                //Subir imagen
                    $images_path_name = time().' - '.$main->getClientOriginalName();
                    //Storage::disk('images')->put($images_path_name, file_get_contents($images_path[0]));
                    Storage::disk('images')->put($images_path_name, File::get($main));//images es la carpeta en storage
                    $property->main_image = $images_path_name;
                }
                $property->update();
            //Guardar imagenes para el Detalle de la Propiedad
                $propertyImageMain = Property::find($id);
                    //elimina imganes anteriores
                    if($images_path != null){
                        $imagesDelete = Image::where('property_id', $id)->get();
                        /* var_dump($imagesDelete);
                        die(); */
                        foreach ($imagesDelete as $img) {
                            Storage::disk('images')->delete($img->image_path);
                            $img->delete();
                        }
                    foreach ($images_path as $img) {
                        $images = new Image();
                        $images->property_id = $propertyImageMain->id;
                        $images_path_name = time().' - '.$img->getClientOriginalName();
                        Storage::disk('images')->put($images_path_name, File::get($img));//images es la carpeta en storage
                        $images->image_path = $images_path_name;
                        $images->save();
                    }
                } 
            return redirect()->route('list')->with([
                'message' => 'La propiedad fue editado con exito!'
            ]);
        }else{
            return redirect()->route('list')->with([
                'message-delete' => 'No se puede realizar la operación'
            ]);
        }
    }
}
