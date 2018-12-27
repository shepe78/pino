<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Contacto
 *
 * @property-read \App\Cliente $Cliente
 * @property-read \App\Plaza $Plaza
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contacto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contacto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contacto nombre($nombre)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contacto query()
 * @mixin \Eloquent
 */
class Contacto extends Model
{
     protected $table='contactos';

    protected $primaryKey='id';

    public $fillable = [
        'nombre',
        'email',
        'telefono',        
        'status',
        'puesto',
        'cliente_id'
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
        'status' => 'string'       
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
        'cliente_id' => 'required'
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

         return $this->belongsTo('App\Cliente');
    }

}
