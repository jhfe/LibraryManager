<?php

namespace App\Repositories;

use App\Models\Item;
use App\Repositories\BaseRepository;

/**
 * Class ItemRepository
 * @package App\Repositories
 * @version October 6, 2021, 7:59 am UTC
*/

class ItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'item_type_id',
        'category_id',
        'title',
        'author_id',
        'isbn_barcode',
        'call_no',
        'publisher_id',
        'edition',
        'year',
        'series_name',
        'tags',
        'volume',
        'subject',
        'abstract',
        'description',
        'state',
        'published',
        'circulation'
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
        return Item::class;
    }
}
