<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HistoriasDetalle
 * @package App\Models
 * @version September 19, 2019, 2:45 am UTC
 *
 * @property \App\Models\HistoriasUsuario idHistoria
 * @property integer id_historia
 * @property string tamaño
 * @property integer esfuerzo_horas
 * @property integer num_sprint
 * @property integer num_release
 * @property integer id_usuario
 * @property integer id_desarrollador
 * @property integer id_tester
 * @property integer estado
 */
class HistoriasDetalle extends Model
{
    use SoftDeletes;

    public $table = 'historias_detalle';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_historia' => 'integer',
        'tamaño' => 'string',
        'esfuerzo_horas' => 'integer',
        'num_sprint' => 'integer',
        'num_release' => 'integer',
        'id_usuario' => 'integer',
        'id_desarrollador' => 'integer',
        'id_tester' => 'integer',
        'estado' => 'integer'
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
    public function idHistoria()
    {
        return $this->belongsTo(\App\Models\HistoriasUsuario::class, 'id_historia');
    }
}
