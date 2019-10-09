<?php

namespace App\Repositories;

use App\Models\HistoriasDetalle;
use App\Repositories\BaseRepository;

/**
 * Class HistoriasDetalleRepository
 * @package App\Repositories
 * @version September 19, 2019, 2:45 am UTC
*/

class HistoriasDetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_historia',
        'tamaño',
        'esfuerzo_horas',
        'num_sprint',
        'num_release',
        'id_usuario',
        'id_desarrollador',
        'id_tester',
        'estado'
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
        return HistoriasDetalle::class;
    }
}
