<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class empresas_productos
 * @package App\Models
 * @version March 18, 2020, 2:20 am UTC
 *
 * @property integer fk_empresa
 * @property integer fk_producto
 */
class empresas_productos extends Model
{

    public $table = 'empresa_producto';
    



    public $fillable = [
        'fk_empresa',
        'fk_producto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fk_empresa' => 'integer',
        'fk_producto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
