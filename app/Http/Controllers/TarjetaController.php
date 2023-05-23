<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarjeta;

class TarjetaController extends Controller
{
    function guardartar(Request $request){
        $tarjeta = new Tarjeta;
        $tarjeta -> NumeroTar = $request->input ("NumeroTar");
        $tarjeta -> FecVen = $request->input ("FecVen");
        $tarjeta -> CodSeg = $request->input("CodSeg");
        $tarjeta->save();
        $tarjetas=Tarjeta::all();
        return view("terminoformulario");
       }
}
