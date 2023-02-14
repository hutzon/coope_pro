<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $contact_date
 * @property $probable_date
 * @property $user_id
 * @property $ahorro_id
 * @property $prestamo_id
 * @property $seguro_id
 * @property $codigo
 * @property $asociado
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Ahorro $ahorro
 * @property Prestamo $prestamo
 * @property Seguro $seguro
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'contact_date' => 'required',
		'probable_date' => 'required',
		'user_id' => 'required',
		'codigo' => 'required',
		'asociado' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contact_date','probable_date','user_id','ahorro_id','prestamo_id','seguro_id','codigo','asociado','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ahorro()
    {
        return $this->hasOne('App\Models\Ahorro', 'id', 'ahorro_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prestamo()
    {
        return $this->hasOne('App\Models\Prestamo', 'id', 'prestamo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function seguro()
    {
        return $this->hasOne('App\Models\Seguro', 'id', 'seguro_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
