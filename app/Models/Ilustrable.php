<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ilustrable
 * @package App\Models
 * @version February 12, 2021, 8:48 pm UTC
 *
 * @property integer $ilustrable_id
 * @property string $ilustrable_type
 * @property string $url
 * @property string $urls
 */
class Ilustrable extends Model
{
    use SoftDeletes;

    public $table = 'ilustrables';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'ilustrable_id',
        'ilustrable_type',
        'url',
        'urls'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ilustrable_id' => 'integer',
        'ilustrable_type' => 'string',
        'url' => 'string',
        'urls' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ilustrable_id' => 'required',
        'ilustrable_type' => 'required',
        'url' => 'required'
    ];

    
    public function Ilustrable()
    {
        return $this->morphTo();
    }   


}
