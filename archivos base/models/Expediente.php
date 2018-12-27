<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
     protected $table='expedientes';

    protected $primaryKey='id';

    public $fillable = [
        
          'acta_nacimiento',
          'curp',
          'identificacion',
          'poder_notarial',
          'documento_migratorio',
          'acta_constitutiva',
          'cuestionario',
          'comprobante_domicilio',
          'cedula_rfc',
          'cliente_id'  
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'acta_nacimiento',
        'curp',
        'identificacion',
        'poder_notarial',
        'documento_migratorio',
        'acta_constitutiva',
        'cuestionario',
        'comprobante_domicilio',
        'cedula_rfc'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'concepto' => 'required',
     
    ];

    
   
    public function Cliente(){

         return $this->belongsTo('App\Cliente','cliente_id');
    }

     public function scopeid($query, $id)
    {
        if ($id != "")
        {
            $query->where('id','like', '%'.$id.'%');

           
        }
    }


    

}
