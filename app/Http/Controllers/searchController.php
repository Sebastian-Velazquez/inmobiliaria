<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class searchController extends Controller
{
    public function search(){
        $property = Property::where('status_id', '!=', 3);

        return view('index/buy',[
            'property' => $property
        ]);
    }
}
