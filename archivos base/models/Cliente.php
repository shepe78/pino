<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     protected $table='clientes';

    protected $primaryKey='id';

    public $fillable = [
        'razon_social',
        'nombre_comercial',
        'domicilio',
        'rfc',
        'status',
        'grupo_id',
        'giro_id',
        'ciudad_id',
        'plaza_id',
        'analista_id',
        'asesor_id',
        'promotor_id',
        'persona',
        'tipo_cliente'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
         'razon_social' => 'string',
        'nombre_comercial' => 'string',
        'domicilio' => 'string',
        'rfc' => 'string',
        'status' => 'string',
        'grupo_id' => 'integer',
        'giro_id' => 'integer',
        'ciudad_id' => 'integer',
        'plaza_id' => 'integer',
        'analista_id' => 'integer',
        'asesor_id' => 'integer',
        'promotor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
         'razon_social' => 'required',
        'nombre_comercial' => 'required',
        'domicilio' => 'required',
        'rfc' => 'required',
        'status' => 'required',
        'grupo_id' => 'required',
        'giro_id' => 'required',
        'ciudad_id' => 'required',
        'plaza_id' => 'required',
        'analista_id' => 'required',
        'asesor_id' => 'required',
        'promotor_id' => 'required'
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

    public function Ciudad(){

         return $this->belongsTo('App\Ciudad','ciudad_id');
    }

    public function Giro(){

         return $this->belongsTo('App\Giro','giro_id');
    }

    public function Grupo(){

         return $this->belongsTo('App\Grupo','grupo_id');
    }

    public function Analista(){

         return $this->belongsTo('App\Colaborador','analista_id');
    }

    public function Asesor(){

         return $this->belongsTo('App\Colaborador','asesor_id');
    }

    public function Promotor(){

         return $this->belongsTo('App\Colaborador','promotor_id');
    }

    public function Contactos(){

         return $this->hasMany('App\Contacto');
    }

    public function Seguimientos(){

         return $this->hasMany('App\Seguimiento');
    }

    public function Facturas(){

         return $this->hasMany('App\Factura');
    }

    public function Informes(){

         return $this->hasMany('App\Informe');
    }


    public function Esquemas(){

         return $this->hasMany('App\Esquema');
    }

    public function Contratos(){

         return $this->hasMany('App\Contrato');
    }

     public function Expediente(){

         return $this->hasOne('App\Expediente');
    }

     public function Empleados(){

         return $this->hasMany('App\Empleado');
    }

}
