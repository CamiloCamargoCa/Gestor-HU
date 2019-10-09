<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HistoriasUsuarios
 * @package App\Models
 * @version September 19, 2019, 12:00 am UTC
 *
 * @property \App\Models\Rolle roll
 * @property \App\Models\Proyecto idProyecto
 * @property \Illuminate\Database\Eloquent\Collection proyecto1s
 * @property \Illuminate\Database\Eloquent\Collection historiasDetalles
 * @property integer id_proyecto
 * @property string tipo_historia
 * @property string titulo_historia
 * @property integer roll_id
 * @property string descripcion
 * @property string reque_interfaz
 * @property string dependencia
 */
class HistoriasUsuarios extends Model
{
    use SoftDeletes;

    public $table = 'historias_usuarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'id_proyecto',
        'tipo_historia',
        'titulo_historia',
        'roll_id',
        'descripcion',
        'reque_interfaz',
        'dependencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_proyecto' => 'integer',
        'tipo_historia' => 'string',
        'titulo_historia' => 'string',
        'roll_id' => 'integer',
        'descripcion' => 'string',
        'reque_interfaz' => 'string',
        'dependencia' => 'integer'
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
    public function roll()
    {
        return $this->belongsTo(\App\Models\Rolle::class, 'roll_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idProyecto()
    {
        return $this->belongsTo(\App\Models\Proyecto::class, 'id_proyecto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function proyecto1s()
    {
        return $this->belongsToMany(\App\Models\Proyecto::class, 'criterios');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function historiasDetalles()
    {
        return $this->hasMany(\App\Models\HistoriasDetalle::class, 'id_historia');
    }
}
