<?php

namespace App\Repositories;

use App\Models\proveedores;
use App\Repositories\BaseRepository;

/**
 * Class proveedoresRepository
 * @package App\Repositories
 * @version March 6, 2020, 4:42 am UTC
*/

class proveedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_proveedor'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return proveedores::class;
    }
}
