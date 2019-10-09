<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuarios
 * @package App\Models
 * @version October 9, 2019, 12:13 am UTC
 *
 * @property \App\Models\Rolle roll
 * @property integer user_id
 * @property boolean operatividad
 * @property integer roll_id
 */
class Usuarios extends Model
{
    use SoftDeletes;

    public $table = 'usuarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'operatividad',
        'roll_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'operatividad' => 'integer',
        'roll_id' => 'integer'
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
}
