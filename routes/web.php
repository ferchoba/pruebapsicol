<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Route::get('/eventos', 'EventosController@index');

//Route::get('/eventos', [EventosController::class, 'index']);


Route::get('/eventos', 'App\Http\Controllers\EventosController@index');

Route::get('/boletas', 'App\Http\Controllers\BoletasController@index');

Route::get('/boletas/{evento}', 'App\Http\Controllers\BoletasController@disponibilidad');									