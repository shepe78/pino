<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Ciudad
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ciudad descripcion($descripcion)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ciudad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ciudad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ciudad query()
 * @mixin \Eloquent
 */
class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $primaryKey = 'id';

    protected $fillable = [

    	'descripcion'
    ];


//Scopes
    public function scopeDescripcion($query, $descripcion)
    {
    	if ($descripcion != "")
    	{
    		$query->where('descripcion','like','%'.$descripcion.'%');
    	}
        
        
    }
}
