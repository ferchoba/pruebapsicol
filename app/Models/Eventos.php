<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    //use HasFactory;
	
	protected $table="eventos";
	
	protected $fillable = [
        'titulo',
        'numboletas'     
    ];
	
	protected $hidden = ['created_at','updated_at']; 
	
	
	
	public function boletas()
	{	
		return $this->hasMany('App\Models\Boletas');
	}
	
}
