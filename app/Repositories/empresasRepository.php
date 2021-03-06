<?php

namespace App\Repositories;

use App\Models\empresas;
use App\Repositories\BaseRepository;

/**
 * Class empresasRepository
 * @package App\Repositories
 * @version March 6, 2020, 4:25 am UTC
*/

class empresasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_empresa'
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
        return empresas::class;
    }
}
