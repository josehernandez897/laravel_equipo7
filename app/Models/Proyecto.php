<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $categoria_id
 * @property $nombrepry
 * @property $descripcion
 * @property $imgpry
 * @property $created_at
 * @property $updated_at
 *
 * @property Tblcategorium $tblcategorium
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'categoria_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','nombrepry','descripcion','Cantidad','imgpry'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tblcategorium()
    {
        return $this->hasOne('App\Models\Tblcategorium', 'id', 'categoria_id');
    }
    

}
