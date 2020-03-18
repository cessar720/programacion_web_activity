<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class productos
 * @package App\Models
 * @version March 6, 2020, 4:29 am UTC
 *
 * @property string nombre_producto
 * @property string valor
 * @property integer unidades
 */
class productos extends Model
{

    public $table = 'producto';
    



    public $fillable = [
        'nombre_producto',
        'valor',
        'unidades'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_producto' => 'string',
        'valor' => 'string',
        'unidades' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
