<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Property;

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
    public function panel()
    {
        //$images = Image::with('property')->get();
        $images = Property::find(1);
        var_dump($images->image);
        die();
        //$images->property;
        return view('index/panel', [
            'images'=> $images
        ]);
    }
}
