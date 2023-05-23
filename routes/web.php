<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrocontroller;
use App\Http\Controllers\usuariodatocontroller;
use App\Http\Controllers\UbicaController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\CarritoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function(){
   return View('home') ;
});

Route::get('/ver_producto', function(){
    return View('ver_producto') ;
});

Route::get('/ver_producto2', function(){
    return View('ver_producto2') ;
});

/*/Route::get('/registro', function(){
    return View('registro') ;
});*/

/*Route::get('/registro-2', function(){
    return View('registro-2') ;
});*/

/*Route::get('/registro-2-2', function(){
    return View('registro-2-2') ;
});

Route::get('/registro-2-3', function(){
    return View('registro-2-3') ;
});*/

Route::get('/terminoformulario', function(){
    return View('terminoformulario') ;
});

Route::get('/iniciesesion', function(){
    return View('iniciesesion') ;
});

Route::get('/carrito', function(){
    return View('carrito') ;
});

Route::get('/plantas', function(){
    return View('plantas') ;
});

Route::get('/flores', function(){
    return View('flores') ;
});

Route::get('/arbustos', function(){
    return View('arbustos') ;
});

Route::get('/frutos', function(){
    return View('frutos') ;
});


//controles registro
Route::view("/registro","registro");
Route::post('/guardarusu',[registrocontroller::Class,'guardarusu']);

//controles usuariodatos
Route::view("/registro","registro");
Route::post('/guardardat',[usuariodatocontroller::Class,'guardardat']);

//controles ubica
Route::view("/registro","registro");
Route::post('/guardaubi',[UbicaController::Class,'guardaubi']);

//controles tarjeta
Route::view("/registro","registro");
Route::post('/guardartar',[TarjetaController::Class,'guardartar']);

//controles carrito
Route::post('/addcarrito',[CarritoController::Class,'addcarrito']);

