<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seguro
 *
 * @property $id
 * @property $name
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seguro extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'seguro_id', 'id');
    }
    

}
