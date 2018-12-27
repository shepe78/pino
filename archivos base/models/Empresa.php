<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
     protected $table='empresas';

    protected $primaryKey='id';

    protected $fillable=[

    	'razon_social',
        'rfc',
        'tipo_empresa',
        'domicilio',
        'status',
        'nombre_corto',
        'plaza_id'

    ];


    protected $guarded=[

    ];

    public function scopeRazon_social($query, $razon_social)
    {
        if ($razon_social != "")
        {
            $query->where('razon_social','like', '%'.$razon_social.'%');

           
        }
    }


    public function Plaza(){

         return $this->belongsTo('App\Plaza','plaza_id');
    }

    public function Clientes(){

         return $this->hasMany('App\Cliente');
    }
    public function Esquemas(){

         return $this->hasMany('App\Esquema');
    }

    public function Facturas(){

         return $this->hasMany('App\Factura');

    }    

    public function Contratos(){

         return $this->hasMany('App\Contrato');

    } 

    public function Individuales(){

         return $this->hasMany('App\Individuales');

    } 
}
