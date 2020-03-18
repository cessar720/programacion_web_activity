<?php

namespace App\Repositories;

use App\Models\empresas_productos;
use App\Repositories\BaseRepository;

/**
 * Class empresas_productosRepository
 * @package App\Repositories
 * @version March 18, 2020, 2:20 am UTC
*/

class empresas_productosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_empresa',
        'fk_producto'
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
        return empresas_productos::class;
    }
}
