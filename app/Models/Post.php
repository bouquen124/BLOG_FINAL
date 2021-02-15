<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
/**
 * Class Post
 * @package App\Models
 * @version February 2, 2021, 6:09 pm UTC
 *
 * @property integer $user_id
 * @property integer $estado_id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $contenido
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'estado_id',
        'titulo',
        'subtitulo',
        'contenido'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'estado_id' => 'integer',
        'titulo' => 'string',
        'subtitulo' => 'string',
        'contenido' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'estado_id' => 'required',
        'titulo' => 'required',
        'subtitulo' => 'required',
        'contenido' => 'required'
    ];

    public function estado(){
        return $this->belongsTo(Estado::class);
    } 

public function Autor(){

    return $this->hasOne(User::class,'id','user_id');
}



public function FotoAliado()
{
    return $this->morphOne(Ilustrable::class,'Ilustrable');
}

}
