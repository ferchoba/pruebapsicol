<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('compradores', 'App\Http\Controllers\CompradoresController@index');
/* Registra un nuevo comprador */
Route::post('compradores', 'App\Http\Controllers\CompradoresController@store');

Route::get('boletas', 'App\Http\Controllers\BoletasController@index');
/* visualiza si existe disponilidad de boletas */
Route::get('boletas/{evento}', 'App\Http\Controllers\BoletasController@disponibilidad');
/* Asigna una boleta de un evento a un comprador */	
Route::post('boletas', 'App\Http\Controllers\BoletasController@store');

