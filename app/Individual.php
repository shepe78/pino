<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
     protected $table='individuales';

    protected $primaryKey='id';

    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
        
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

    
    public function Empleado(){

         return $this->belongsTo('App\Empleado','empleado_id');
    }

    public function Empresa(){

         return $this->belongsTo('App\Empresa','empresa_id');
    }

    public function Cliente(){

         return $this->belongsTo('App\Cliente','cliente_id');
    }

   

}
