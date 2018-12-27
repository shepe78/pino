<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $table='productos';

    protected $primaryKey='id';

    public $fillable = [
    	'codigo',
    	'descripcion'
        
    ];

    //Scopes
    public function scopeDescripcion($query, $descripcion)
    {
    	if ($descripcion != "")
    	{
    		$query->where('descripcion','like','%'.$descripcion.'%');
    	}
        
        
    }
}
