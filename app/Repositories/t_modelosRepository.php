<?php

namespace App\Repositories;

use App\Models\t_modelos;
use App\Repositories\BaseRepository;

/**
 * Class t_modelosRepository
 * @package App\Repositories
 * @version June 3, 2020, 2:17 am UTC
*/

class t_modelosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_modelo',
        'descripcion_modelo',
        'modelo'
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
        return t_modelos::class;
    }
}
