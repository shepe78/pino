<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{
    protected $table='choferes';

    protected $primaryKey='id';

    public $fillable = [
        'nombre',
        'telefono',
        'status',
        
    ];

    public function scopeNombre($query, $nombre)
    {
    	if ($nombre != "")
    	{
    		$query->where('nombre','like','%'.$nombre.'%');
    	}
        
        
    }
}
