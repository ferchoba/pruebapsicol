<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletas extends Model
{
    //use HasFactory;
	protected $table="boletas";
	
	protected $fillable = [
        'id_evento',
        'id_comprador '     
    ];
	
	protected $hidden = ['created_at','updated_at']; 
	
	
	
	public function eventos()
	{	
		return $this->belongsTo('App\Models\Eventos');
		
	}
	
	public function Compradores()
	{	
		return $this->belongsTo('App\Models\Compradores');
		
	}
	
}
