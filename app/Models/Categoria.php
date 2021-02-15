<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categoria
 * @package App\Models
 * @version February 2, 2021, 5:59 pm UTC
 *
 * @property integer $estado_id
 * @property string $nombre
 * @property string $descripcion
 */
class Categoria extends Model
{
    use SoftDeletes;

    public $table = 'categorias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'estado_id',
        'nombre',
        'descripcion'
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
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estado_id' => 'required',
        'nombre' => 'required',
        'descripcion' => 'required'
    ];
    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    
    public function productos(){

        return $this->hasMany(productos::class);
        
        }

        
    public function servicios(){

        return $this->hasMany(Servicio::class);
        
        }
}
