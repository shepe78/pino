<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table='sucursales';

    protected $primaryKey='id';

    public $fillable = [
        'descripcion'
        
        
    ];

    public function scopeDescripcion($query, $descripcion)
    {
    	if ($descripcion != "")
    	{
    		$query->where('descripcion','like','%'.$descripcion.'%');
    	}
        
        
    }
}
