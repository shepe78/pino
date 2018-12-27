<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
     protected $table='seguimientos';

    protected $primaryKey='id';

    public $fillable = [
        'fecha',
        'comentarios',
        'id_usuario',
        'tipo_seguimiento',
        'cliente_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha',
        'comentarios',
        'usuario_id',
        'tipo_seguimiento',
        'cliente_id'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'comentarios' => 'required',
     
    ];

      public function Cliente(){

         return $this->belongsTo('App\Cliente','cliente_id');
    }

    public function User(){

         return $this->belongsTo('App\User','usuario_id');
    }

}
