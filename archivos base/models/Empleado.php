<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
     protected $table='empleados';

    protected $primaryKey='id';

    public $fillable = [
        'nombre',
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
          ];

    public function scopeNombre($query, $nombre)
    {
        if ($nombre != "")
        {
            $query->where('nombre','like', '%'.$nombre.'%');

           
        }
    }

    public function Cliente(){

         return $this->belongsTo('App\Cliente','cliente_id');
    }

    public function Empresa(){

         return $this->belongsTo('App\Empresa','empresa_id');
    }
    

    

}
