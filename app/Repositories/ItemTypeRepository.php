<?php

namespace App\Repositories;

use App\Models\ItemType;
use App\Repositories\BaseRepository;

/**
 * Class ItemTypeRepository
 * @package App\Repositories
 * @version October 6, 2021, 10:18 am UTC
*/

class ItemTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'state'
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
        return ItemType::class;
    }
}
