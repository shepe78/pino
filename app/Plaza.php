<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plaza extends Model
{
     protected $table='plazas';

    protected $primaryKey='id';

    protected $fillable=[

    	'descripcion'
    ];


    protected $guarded=[

    ];

    public function scopeDescripcion($query, $descripcion)
    {
        if ($descripcion != "")
        {
            $query->where('descripcion','like', '%'.$descripcion.'%');

           
        }
    }


    public function clientes()
    {
        return $this->hasMany('App\Cliente');
    }

}
