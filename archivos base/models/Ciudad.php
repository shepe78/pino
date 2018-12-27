<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
     protected $table='ciudads';

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

}
