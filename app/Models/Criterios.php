<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Criterios
 * @package App\Models
 * @version September 19, 2019, 2:39 am UTC
 *
 * @property \App\Models\Proyecto idProyecto
 * @property \App\Models\HistoriasUsuario idHistoria
 * @property integer id_proyecto
 * @property integer id_historia
 * @property string descripcion
 */
class Criterios extends Model
{
    use SoftDeletes;

    public $table = 'criterios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'id_proyecto',
        'id_historia',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_proyecto' => 'integer',
        'id_historia' => 'integer',
        'descripcion' => 'string'
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
    public function idHistoria()
    {
        return $this->belongsTo(\App\Models\HistoriasUsuario::class, 'id_historia');
    }
}
