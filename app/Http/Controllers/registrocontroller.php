<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registro;

class registrocontroller extends Controller
{
    function guardarusu(Request $request){
        $registro = new Registro;
        $registro -> correo = $request->input("correo");
        $registro -> contraseña = $request->input("contraseña");
        $registro->save();
        $registros=Registro::all();
        return view("registro-2");
       }
    }