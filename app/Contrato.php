<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
/**
 * App\Contrato
 *
 * @property-read \App\Cliente $cliente
 * @property-read \App\Empresa $empresa
 * @property-read mixed $dias_aceptado
 * @property-read mixed $dias_firma_cliente
 * @property-read mixed $dias_firma_rl
 * @property-read mixed $dias_liberado
 * @property mixed $dias_rechazo
 * @property-read mixed $dias_reenvio
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contrato newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contrato newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contrato query()
 * @mixin \Eloquent
 */
class Contrato extends Model


{
    protected $table='contratos';

    protected $primaryKey='id';

    public $timestamp=false;

    protected $fillable=[

    	
    	'cliente_id',
    	'facturadora_id',
       
    	


    ];


    protected $guarded=[

    ];

   


    
    public function cliente()
    {
    	return $this->belongsTo('App\Cliente', 'cliente_id');
    }

    public function empresa()
    {
    	return $this->belongsTo('App\Empresa', 'facturadora_id');
    }



    
    public function setDiasRechazoAttribute($dias)
    {
 
        $this->attributes['dias_rechazo'] = Carbon::parse('Y-m-d', $dias);
            

    }    

    public function getDiasRechazoAttribute($dias)
    {
 

            $dt = Carbon::parse($this->f_registro);
            $dt2 = Carbon::parse($this->f_rechazo);
            
            $festivos = $dt->diffInDaysFiltered(function(Carbon $festivos) {
            return $festivos->isWeekend();
            }, $dt2);

           // dd($festivos);

            $laborables = $dt->diffInDaysFiltered(function(Carbon $laborables) {
            return $laborables;
            }, $dt2);    

            // dd($laborables);    

            $dias = $laborables - $festivos;



            return $dias;

                // 104

    }


    public function getDiasReenvioAttribute($diasr)
    {
 

            $da = Carbon::parse($this->f_rechazo);
            $da2 = Carbon::parse($this->f_reenvio);
            
            $festivos = $da->diffInDaysFiltered(function(Carbon $festivos) {
            return $festivos->isWeekend();
            }, $da2);

           // dd($festivos);

            $laborables = $da->diffInDaysFiltered(function(Carbon $laborables) {
            return $laborables;
            }, $da2);    

            // dd($laborables);    

            $diasr = $laborables - $festivos;



            return $diasr;

                // 104

    }

    public function getDiasAceptadoAttribute($diasa)
    {
 

            $da = Carbon::parse($this->f_reenvio);
            $da2 = Carbon::parse($this->f_aceptado);
            
            $festivos = $da->diffInDaysFiltered(function(Carbon $festivos) {
            return $festivos->isWeekend();
            }, $da2);

           // dd($festivos);

            $laborables = $da->diffInDaysFiltered(function(Carbon $laborables) {
            return $laborables;
            }, $da2);    

            // dd($laborables);    

            $diasa = $laborables - $festivos;



            return $diasa;

    }

    public function getDiasLiberadoAttribute($diasa)
    {
 

            $da = Carbon::parse($this->f_aceptado);
            $da2 = Carbon::parse($this->f_liberado);
            
            $festivos = $da->diffInDaysFiltered(function(Carbon $festivos) {
            return $festivos->isWeekend();
            }, $da2);

           // dd($festivos);

            $laborables = $da->diffInDaysFiltered(function(Carbon $laborables) {
            return $laborables;
            }, $da2);    

            // dd($laborables);    

            $diasl = $laborables - $festivos;



            return $diasl;

    }

    public function getDiasFirmaRlAttribute($diasf1)
    {
 

            $da = Carbon::parse($this->f_liberado);
            $da2 = Carbon::parse($this->f_firma_rl);
            
            $festivos = $da->diffInDaysFiltered(function(Carbon $festivos) {
            return $festivos->isWeekend();
            }, $da2);

           // dd($festivos);

            $laborables = $da->diffInDaysFiltered(function(Carbon $laborables) {
            return $laborables;
            }, $da2);    

            // dd($laborables);    

            $diasf1 = $laborables - $festivos;



            return $diasf1;

    }

    public function getDiasFirmaClienteAttribute($diasf2)
    {
 

            $da = Carbon::parse($this->f_firma_rl);
            $da2 = Carbon::parse($this->f_firma_cliente);
            
            $festivos = $da->diffInDaysFiltered(function(Carbon $festivos) {
            return $festivos->isWeekend();
            }, $da2);

           // dd($festivos);

            $laborables = $da->diffInDaysFiltered(function(Carbon $laborables) {
            return $laborables;
            }, $da2);    

            // dd($laborables);    

            $diasf2 = $laborables - $festivos;



            return $diasf2;

    }




}