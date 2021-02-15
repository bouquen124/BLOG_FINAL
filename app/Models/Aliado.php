<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Aliado
 * @package App\Models
 * @version February 2, 2021, 5:53 pm UTC
 *
 * @property integer $estado_id
 * @property string $nombre
 * @property string $descripcion
 * @property string $direcion
 * @property string $correo
 * @property string $telefono
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 */
class Aliado extends Model
{
    use SoftDeletes;

    public $table = 'aliados';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'estado_id',
        'nombre',
        'descripcion',
        'direcion',
        'correo',
        'telefono',
        'facebook',
        'twitter',
        'instagram'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'estado_id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'direcion' => 'string',
        'correo' => 'string',
        'telefono' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'instagram' => 'string'
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
        'telefono' => 'required',
        'facebook' => 'required',
        'twitter' => 'required',
        'instagram' => 'required'
    ];

    public function estado(){
        return $this->belongsTo(Estado::class);
    }


    
    public function FotoAliado()
    {
        return $this->morphOne(Ilustrable::class,'Ilustrable');
    }


}
