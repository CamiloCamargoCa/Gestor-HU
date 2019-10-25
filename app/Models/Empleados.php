<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empleados
 * @package App\Models
 * @version October 25, 2019, 1:03 pm -05
 *
 * @property \App\Models\Proyecto idProyecto
 * @property \App\Models\Rolle idRoll
 * @property integer cedulanombre
 * @property string nombre
 * @property string salario
 * @property boolean Estado
 * @property integer id_roll
 * @property integer id_proyecto
 */
class Empleados extends Model
{
    use SoftDeletes;

    public $table = 'empleados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'cedula',
        'nombre',
        'salario',
        'Estado',
        'id_roll',
        'id_proyecto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cedula' => 'integer',
        'nombre' => 'string',
        'salario' => 'string',
        'Estado' => 'integer',
        'id_roll' => 'integer',
        'id_proyecto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idProyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class, 'id_proyecto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idRoll()
    {
        return $this->belongsTo(\App\Models\Rolle::class, 'id_roll');
    }
}
