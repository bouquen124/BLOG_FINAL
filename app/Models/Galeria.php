<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Galeria
 * @package App\Models
 * @version February 23, 2021, 6:08 pm UTC
 *
 * @property integer $ilustrable_id
 * @property string $descripcion
 */
class Galeria extends Model
{
    use SoftDeletes;

    public $table = 'galerias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'ilustrable_id',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ilustrable_id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
