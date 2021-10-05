<?php

namespace App\Repositories;

use App\Models\Publisher;
use App\Repositories\BaseRepository;

/**
 * Class PublisherRepository
 * @package App\Repositories
 * @version October 4, 2021, 10:28 pm UTC
*/

class PublisherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'email',
        'phone',
        'country',
        'website',
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
        return Publisher::class;
    }
}
