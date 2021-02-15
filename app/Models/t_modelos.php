<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class t_modelos
 * @package App\Models
 * @version June 3, 2020, 2:17 am UTC
 *
 * @property string $nombre_modelo
 * @property string $descripcion_modelo
 * @property string $modelo
 */
class t_modelos extends Model
{
    use SoftDeletes;

    public $table = 't_modelos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_modelo',
        'descripcion_modelo',
        'modelo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_modelo' => 'string',
        'descripcion_modelo' => 'string',
        'modelo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_modelo' => 'required',
        'modelo' => 'required'
    ];

    
}
