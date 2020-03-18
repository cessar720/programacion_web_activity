<?php

namespace App\Repositories;

use App\Models\productos_proveedores;
use App\Repositories\BaseRepository;

/**
 * Class productos_proveedoresRepository
 * @package App\Repositories
 * @version March 18, 2020, 2:23 am UTC
*/

class productos_proveedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_producto',
        'fk_proveedor'
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
        return productos_proveedores::class;
    }
}
