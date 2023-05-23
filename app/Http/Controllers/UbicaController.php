<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ubica;

class UbicaController extends Controller
{
    function guardaubi(Request $request){
        $ubica = new Ubica;
        $ubica -> estado = $request->input ("estado");
        $ubica -> municipio = $request->input ("municipio");
        $ubica -> delegacion = $request->input("delegacion");
        $ubica -> calle = $request->input("calle");
        $ubica -> exterior = $request->input("exterior");
        $ubica -> interior = $request->input("interior");
        $ubica -> descripcion = $request->input("descripcion");
        $ubica->save();
        $ubicas=Ubica::all();
        return view("registro-2-3");
       }
}
