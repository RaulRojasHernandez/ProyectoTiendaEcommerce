<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuariodato;

class usuariodatocontroller extends Controller
{
    function guardardat(Request $request){
        $usuariodato = new Usuariodato;
        $usuariodato -> nombre = $request->input("nombre");
        $usuariodato -> apepat = $request->input("apepat");
        $usuariodato -> apemat = $request->input("apemat");
        $usuariodato -> edad = $request->input("edad");
        $usuariodato->save();
        $usuariodatos=Usuariodato::all();
        return view("registro-2-2");
       }
}
