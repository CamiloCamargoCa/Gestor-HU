<?php

namespace App\Repositories;

use App\Models\Empleados;
use App\Repositories\BaseRepository;

/**
 * Class EmpleadosRepository
 * @package App\Repositories
 * @version October 25, 2019, 1:03 pm -05
*/

class EmpleadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cedulanombre',
        'nombre',
        'salario',
        'Estado',
        'id_roll',
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
        return Empleados::class;
    }
}
