<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
     protected $table='informes';

    protected $primaryKey='id';

    public $fillable = [
        'concepto',
        'importe_pesos',
        'importe_dolares',
        'periodo',
        'ejercicio',
        'status',       
        'cliente_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
       'concepto',
        'importe_pesos',
        'importe_dolares',
        'periodo',
        'ejercicio',
        'status'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'concepto' => 'required',
     
    ];

     public function scopeId($query, $id)
    {
        if ($id != "")
        {
            $query->where('id','=', $id);

           
        }
    }

    
    public function Empresa(){

         return $this->belongsTo('App\Empresa','empresa_id');
    }

    public function Cliente(){

         return $this->belongsTo('App\Cliente','cliente_id');
    }

   

}
