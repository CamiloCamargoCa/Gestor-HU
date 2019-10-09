<?php

namespace App\Repositories;

use App\Models\Criterios;
use App\Repositories\BaseRepository;

/**
 * Class CriteriosRepository
 * @package App\Repositories
 * @version September 19, 2019, 2:39 am UTC
*/

class CriteriosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_proyecto',
        'id_historia',
        'descripcion'
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
        return Criterios::class;
    }
}
