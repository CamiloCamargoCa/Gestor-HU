<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Actividades
 * @package App\Models
 * @version December 1, 2019, 10:14 pm -05
 *
 * @property integer cód_proyecto
 * @property integer id_pbi
 * @property integer num_sprint
 * @property string nom_actividad
 * @property integer id_ingeniero
 * @property string fech_ini_real
 * @property integer hras_esfuerzo
 */
class Actividades extends Model
{
    use SoftDeletes;

    public $table = 'actividades';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'cód_proyecto',
        'id_pbi',
        'num_sprint',
        'nom_actividad',
        'id_ingeniero',
        'fech_ini_real',
        'hras_esfuerzo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cód_proyecto' => 'integer',
        'id_pbi' => 'integer',
        'num_sprint' => 'integer',
        'nom_actividad' => 'string',
        'id_ingeniero' => 'integer',
        'fech_ini_real' => 'date',
        'hras_esfuerzo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
