<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $user_id
 * @property $dpi
 * @property $first_name
 * @property $second_name
 * @property $last_name
 * @property $address
 * @property $phone
 * @property $birth_date
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'dpi' => 'required',
		'first_name' => 'required',
		'second_name' => 'required',
		'last_name' => 'required',
		'address' => 'required',
		'phone' => 'required',
		'birth_date' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','dpi','first_name','second_name','last_name','address','phone','birth_date','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
