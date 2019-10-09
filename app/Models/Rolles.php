<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rolles
 * @package App\Models
 * @version October 6, 2019, 11:05 pm UTC
 *
 * @property \App\Models\Proyecto idProyecto
 * @property \Illuminate\Database\Eloquent\Collection historiasUsuarios
 * @property \Illuminate\Database\Eloquent\Collection usuarios
 * @property string nombre
 * @property integer id_proyecto
 */
class Rolles extends Model
{
    use SoftDeletes;

    public $table = 'rolles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'id_proyecto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function historiasUsuarios()
    {
        return $this->hasMany(\App\Models\HistoriasUsuario::class, 'roll_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'roll_id');
    }
}
