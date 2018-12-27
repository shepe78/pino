<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esquema extends Model
{
     protected $table='esquemas';

    protected $primaryKey='id';

    public $fillable = [
        'concepto',
        'comision',
        'fecha_inicio',
        'facturadora_id',
        'pagadora_id',
        'status',
        'periodicidad',
        'contrato',
        'cliente_id',
        'producto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'concepto',
        'comision',
        'fecha_inicio',
        'facturadora_id',
        'pagadora_id',
        'status',
        'periodicidad',
        'contrato',
        
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

    
    public function Pagadora(){

         return $this->belongsTo('App\Empresa','pagadora_id');
    }

    public function Facturadora(){

         return $this->belongsTo('App\Empresa','facturadora_id');
    }

    public function Cliente(){

         return $this->belongsTo('App\Cliente','cliente_id');
    }

   

}
