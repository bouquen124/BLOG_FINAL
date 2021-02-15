<?php

namespace App\Repositories;

use App\Models\Servicio;
use App\Repositories\BaseRepository;

/**
 * Class ServicioRepository
 * @package App\Repositories
 * @version February 2, 2021, 6:04 pm UTC
*/

class ServicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estado_id',
        'categoria_id',
        'nombre',
        'descripcion',
        'costo'
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
        return Servicio::class;
    }
}
