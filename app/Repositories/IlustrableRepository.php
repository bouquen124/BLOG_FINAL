<?php

namespace App\Repositories;

use App\Models\Ilustrable;
use App\Repositories\BaseRepository;

/**
 * Class IlustrableRepository
 * @package App\Repositories
 * @version February 12, 2021, 8:48 pm UTC
*/

class IlustrableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ilustrable_id',
        'ilustrable_type',
        'url',
        'urls'
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
        return Ilustrable::class;
    }
}
