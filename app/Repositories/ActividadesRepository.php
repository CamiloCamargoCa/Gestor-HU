<?php

namespace App\Repositories;

use App\Models\Actividades;
use App\Repositories\BaseRepository;

/**
 * Class ActividadesRepository
 * @package App\Repositories
 * @version December 1, 2019, 10:14 pm -05
*/

class ActividadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cód_proyecto',
        'id_pbi',
        'num_sprint',
        'nom_actividad',
        'id_ingeniero',
        'fech_ini_real',
        'hras_esfuerzo'
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
        return Actividades::class;
    }
}
