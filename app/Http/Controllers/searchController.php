<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Operation;
use App\Models\TypeProperty;

class SearchController extends Controller
{
    public function search(Request $request){
        $name = $request->input('name');
        $optionAccion = $request->input('optionAccion');
        $optionTipo = $request->input('optionTipo');
        $minimo = $request->input('minimo');
        $maximo = $request->input('maximo');
        
        $propertyAll = Property::where('status_id', '!=', 3);
        if ($name) {
            $propertyAll->where(function ($query) use ($name) {
                $query->where('adress', 'like', '%' . $name . '%')
                    ->orWhere('adress_number', 'like', '%' . $name . '%');
            });
        }
        if ($optionAccion) {
            $propertyAll->where('operation_id', '=', $optionAccion);
        }
        if ($optionTipo) {
            $propertyAll->where('type_property_id', '=', $optionTipo);
        }
        if ($minimo && $maximo) {
            $propertyAll->whereBetween('price', [$minimo, $maximo]);
        }
        
        //checkBox 
        $dining_room = $request->input('diningRoom'); //Comedor
        $yard = $request->input('yard'); //Patio
        $pool = $request->input('pool'); //Piscina
        $garage = $request->input('garage'); 
        $gas = $request->input('gas'); 
        $expenses = $request->input('expenses'); 
        $kitchen = $request->input('kitchen'); 
        $room_number = $request->input('room_number');
        /* var_dump($room_number);
        die(); */
        $bathroom_number = $request->input('bathroom_number');

        if ($dining_room) {
            $propertyAll->where('dining_room', '=', $dining_room);
        }
        if ($yard) {
            $propertyAll->where('yard', '=', $yard);
        }
        if ($pool) {
            $propertyAll->where('pool', '=', $pool);
        }
        if ($garage) {
            $propertyAll->where('garage', '=', $garage);
        }
        if ($gas) {
            $propertyAll->where('gas', '=', $gas);
        }
        if ($expenses) {
            $propertyAll->where('expenses', '=', $expenses);
        }
        if ($kitchen) {
            $propertyAll->where('kitchen', '=', $kitchen);
        }
        if ($room_number) {
            $propertyAll->where('room_number', '=', $room_number);
        }
        if ($bathroom_number) {
            $propertyAll->where('bathroom_number', '=', $bathroom_number);
        }
        $propertyAll = $propertyAll->orderBy('adress', 'asc')->paginate(6);
        //vista
        $PropertyNew = Property::orderBy('created_at', 'desc')
            ->where('status_id', '!=', 3)
            ->limit(4)
            ->get();
            $operation = Operation::all();
            $typeProperty = TypeProperty::all();

        return view('index/buy-rent',[
            'propiedades' => $propertyAll,
            'PropiedadNuevo' => $PropertyNew,
            'operacion' => $operation,
            'tipoPropiedad' => $typeProperty
        ]);//carpeta y archivo
    }
}
