<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class empresas
 * @package App\Models
 * @version March 6, 2020, 4:25 am UTC
 *
 * @property string nombre_empresa
 */
class empresas extends Model
{

    public $table = 'empresa';
    



    public $fillable = [
        'nombre_empresa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_empresa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
