<?php

namespace App\Http\Controllers;

use App\Models\Compradores;
use Illuminate\Http\Request;

class CompradoresController extends Controller
{
    
	public function index()
    {
        return Compradores::all();
    }
	
	/* Agrega un nuevo comprador */
	
	public function store(Request $request)
    {
		$comprador = Compradores::create($request->all());

        return response()->json($comprador, 201);
    }

}
