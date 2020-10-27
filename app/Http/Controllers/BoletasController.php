<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\Boletas;
use Illuminate\Http\Request;

class BoletasController extends Controller
{
	public function index($idEvento = '')
    {
	   return Boletas::all();	 	   
    }
	
	/* Retorna la disponibilidad de boletas por el evento consultado */
	
	public function disponibilidad($idEvento)
    {
		$numBolCom = Boletas::where('id_evento', '=', $idEvento)->count();
		
		$numBolxEvento = Eventos::select('numboletas')->where('id', '=', $idEvento)->first();
		
		$numTotal = $numBolxEvento->numboletas;
		
		return $bolRes = $numTotal - $numBolCom;
	
		
    }
	
	/* Asigna una boleta a un comprador */
	
	public function store(Request $request)
    {
		$boleta = Boletas::create($request->all());

        return response()->json($boleta, 201);
    }

}
