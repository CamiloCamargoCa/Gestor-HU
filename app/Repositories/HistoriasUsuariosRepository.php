<?php

namespace App\Repositories;

use App\Models\HistoriasUsuarios;
use App\Repositories\BaseRepository;

/**
 * Class HistoriasUsuariosRepository
 * @package App\Repositories
 * @version September 19, 2019, 12:00 am UTC
*/

class HistoriasUsuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_proyecto',
        'tipo_historia',
        'titulo_historia',
        'roll_id',
        'descripcion',
        'reque_interfaz',
        'dependencia'
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
        return HistoriasUsuarios::class;
    }
}
