<?php

namespace App\Repositories;

use App\Models\Proyectos;
use App\Repositories\BaseRepository;

/**
 * Class ProyectosRepository
 * @package App\Repositories
 * @version September 19, 2019, 2:06 am UTC
*/

class ProyectosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return Proyectos::class;
    }
}
