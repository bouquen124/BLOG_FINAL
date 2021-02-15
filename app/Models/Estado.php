<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estado
 * @package App\Models
 * @version February 2, 2021, 5:43 pm UTC
 *
 * @property string $nombre
 */
class Estado extends Model
{
    use SoftDeletes;

    public $table = 'estados';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    

public function aliados(){

return $this->hasMany(Aliado::class);

}

public function clientes(){

return $this->hasMany(Cliente::class);

}
public function categorias(){

    return $this->hasMany(categorias::class);
    
    }


    public function productos(){

        return $this->hasMany(productos::class);
        
        }

        public function servicios(){

            return $this->hasMany(Servicio::class);
            
            }

            
        public function post(){

            return $this->hasMany(Post::class);
            
            }
}
