<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compradores extends Model
{
    //use HasFactory;
	
	protected $table="compradores";
	
	protected $fillable = [
        'nombre',
        'cedula'     
    ];
	
	protected $hidden = ['clave','created_at','updated_at']; 
	
	
	
	public function boletas()
	{	
		return $this->hasMany('App\Models\Boletas');
	}
}
