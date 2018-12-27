<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
     protected $table='colaboradores';

    protected $primaryKey='id';

    public $fillable = [
        'nombre',
        'email',
        'telefono',
        'celular',
        // 'domicilio',
        'status',
        'tipo_colaborador',
        'plaza_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'email' => 'string',
        'telefono' => 'string',
        'celular' => 'string',
        'status' => 'string',
        'tipo_colaborador' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'email' => 'required',
        'status' => 'required',
        'tipo_colaborador' => 'required',
        'plaza_id' => 'required'
    ];

    public function scopeNombre($query, $nombre)
    {
        if ($nombre != "")
        {
            $query->where('nombre','like', '%'.$nombre.'%');

           
        }
    }

    public function Plaza(){

         return $this->belongsTo('App\Plaza','plaza_id');
    }

    public function Cliente(){

         return $this->hasMany('App\Cliente');
    }

}
