<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcategorium
 *
 * @property $id
 * @property $nombre_c
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto[] $proyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tblcategorium extends Model
{
    
    static $rules = [
		'nombre_c' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_c'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto', 'categoria_id', 'id');
    }
    

}
