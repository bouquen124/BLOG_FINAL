<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Servicio
 * @package App\Models
 * @version February 2, 2021, 6:04 pm UTC
 *
 * @property integer $estado_id
 * @property integer $categoria_id
 * @property string $nombre
 * @property string $descripcion
 * @property number $costo
 */
class Servicio extends Model
{
    use SoftDeletes;

    public $table = 'servicios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'estado_id',
        'categoria_id',
        'nombre',
        'descripcion',
        'costo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'estado_id' => 'integer',
        'categoria_id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'costo' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estado_id' => 'required',
        'categoria_id' => 'required',
        'nombre' => 'required',
        'descripcion' => 'required',
        'costo' => 'required'
    ];

   
    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    
    
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    } 



    public function Fotoservicio()
    {
        return $this->morphOne(Ilustrable::class,'Ilustrable');
    }
    
}
