<?php

namespace App\Http\Controllers;


use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index()
    {
       return Eventos::all();
	  
    }
}
