<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version February 2, 2021, 5:56 pm UTC
 *
 * @property  $estado_id
 * @property string $nombre
 * @property string $descripcion
 * @property string $direcion
 * @property string $correo
 * @property string $telefono
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'estado_id',
        'nombre',
        'descripcion',
        'direcion',
        'correo',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'direcion' => 'string',
        'correo' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estado_id' => 'required',
        'nombre' => 'required',
        'descripcion' => 'required',
        'direcion' => 'required',
        'correo' => 'required',
        'telefono' => 'required'
    ];
    
    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    

    public function Fotocliente()
{
    return $this->morphOne(Ilustrable::class,'Ilustrable');
}

}
