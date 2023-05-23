<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;

class CarritoController extends Controller
{
    function addcarrito(Request $request){
        $carrito = new Carrito;
        $carrito -> prod = $request->input("prod");
        $carrito->save();
        $carritos=Carrito::all();
        return view("addcarrito");
       }
}
