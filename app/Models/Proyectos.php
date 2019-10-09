<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proyectos
 * @package App\Models
 * @version September 19, 2019, 2:06 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection historiasUsuarios
 * @property \Illuminate\Database\Eloquent\Collection rolles
 * @property string nombre
 */
class Proyectos extends Model
{
    use SoftDeletes;

    public $table = 'proyectos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function historiasUsuarios()
    {
        return $this->belongsToMany(\App\Models\HistoriasUsuario::class, 'criterios');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function rolles()
    {
        return $this->belongsToMany(\App\Models\Rolle::class, 'historias_usuarios');
    }
}
