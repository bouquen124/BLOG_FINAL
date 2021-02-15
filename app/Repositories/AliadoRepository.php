<?php

namespace App\Repositories;

use App\Models\Aliado;
use App\Repositories\BaseRepository;

/**
 * Class AliadoRepository
 * @package App\Repositories
 * @version February 2, 2021, 5:53 pm UTC
*/

class AliadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Aliado::class;
    }
}
