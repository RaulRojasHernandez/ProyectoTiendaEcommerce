<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\usuarior;

class UsuariorController extends Controller
{

   function guardarusu(Request $request){
    $registro = new registro;
    $registro -> correo = $request->input("correo");
    $registro -> contraseña = $request->input("password");
    $registro->save();
    $registros=usuarior::all();
    return view("registro-2");
   }
    
}
