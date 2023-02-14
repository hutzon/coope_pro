<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarjeta
 *
 * @property $id
 * @property $cod_socio
 * @property $nombre
 * @property $apellido1
 * @property $apellido2
 * @property $numero_tc
 * @property $fch_con
 * @property $monto
 * @property $saldo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarjeta extends Model
{
    
    static $rules = [
		'cod_socio' => 'required',
		'nombre' => 'required',
		'apellido1' => 'required',
		'apellido2' => 'required',
		'numero_tc' => 'required',
		'fch_con' => 'required',
		'monto' => 'required',
		'saldo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_socio','nombre','apellido1','apellido2','numero_tc','fch_con','monto','saldo'];



}
