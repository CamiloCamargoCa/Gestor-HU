<?php

namespace App\Repositories;

use App\Models\Rolles;
use App\Repositories\BaseRepository;

/**
 * Class RollesRepository
 * @package App\Repositories
 * @version October 6, 2019, 11:05 pm UTC
*/

class RollesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'id_proyecto'
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
        return Rolles::class;
    }
}
