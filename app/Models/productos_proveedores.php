<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class productos_proveedores
 * @package App\Models
 * @version March 18, 2020, 2:23 am UTC
 *
 * @property integer fk_producto
 * @property integer fk_proveedor
 */
class productos_proveedores extends Model
{

    public $table = 'producto_proveedor';
    



    public $fillable = [
        'fk_producto',
        'fk_proveedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fk_producto' => 'integer',
        'fk_proveedor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
