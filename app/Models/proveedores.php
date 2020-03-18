<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class proveedores
 * @package App\Models
 * @version March 6, 2020, 4:42 am UTC
 *
 * @property string nombre_proveedor
 */
class proveedores extends Model
{

    public $table = 'proveedor';
    



    public $fillable = [
        'nombre_proveedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_proveedor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
