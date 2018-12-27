<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
     protected $table='facturas';

    protected $primaryKey='id';

    public $fillable = [
        'concepto',
        'importe',
        'fecha',
        'concepto',
        'moneda',
        'status',
        'empresa_id',
        'cliente_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
       'concepto',
        'importe',
        'fecha',
        'concepto',
        'moneda',
        'status',
        'empresa_id',
        'cliente_id'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'concepto' => 'required',
     
    ];

    
    public function Empresa(){

         return $this->belongsTo('App\Empresa','empresa_id');
    }

    public function Cliente(){

         return $this->belongsTo('App\Cliente','cliente_id');
    }

}
