<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
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

    public function messageStatus($id){
        $message = Message::find($id);
        if ($message->status == 0) {
            $message = Message::find($id);
            $message->status = 1;
            $message->update();
            
        }
        var_dump('Cargado con exito!');
        die();
    }

    public function messageDelete($id){
        $message = Message::find($id);
        $message->delete();
        var_dump('Eliminado con exito!');
        die();
    }
}
