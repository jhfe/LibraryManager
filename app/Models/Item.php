<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Item
 * @package App\Models
 * @version October 6, 2021, 7:59 am UTC
 *
 * @property integer $item_type_id
 * @property integer $category_id
 * @property string $title
 * @property integer $author_id
 * @property string $isbn_barcode
 * @property string $call_no
 * @property integer $publisher_id
 * @property string $edition
 * @property string $year
 * @property string $series_name
 * @property string $tags
 * @property string $volume
 * @property string $subject
 * @property string $abstract
 * @property string $description
 * @property boolean $state
 * @property boolean $published
 * @property boolean $circulation
 */
class Item extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'items';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'item_type_id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'author_id' => 'integer',
        'isbn_barcode' => 'string',
        'call_no' => 'string',
        'publisher_id' => 'integer',
        'edition' => 'string',
        'year' => 'date',
        'series_name' => 'string',
        'tags' => 'string',
        'volume' => 'string',
        'subject' => 'string',
        'abstract' => 'string',
        'description' => 'string',
        'state' => 'boolean',
        'published' => 'boolean',
        'circulation' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'item_type_id' => 'required|integer',
        'category_id' => 'required|integer',
        'title' => 'required|string|max:500',
        'author_id' => 'required|integer',
        'isbn_barcode' => 'required|string|max:255',
        'call_no' => 'required|string|max:255',
        'publisher_id' => 'required|integer',
        'edition' => 'nullable|string|max:255',
        'year' => 'nullable',
        'series_name' => 'nullable|string|max:500',
        'tags' => 'nullable|string|max:500',
        'volume' => 'nullable|string|max:255',
        'subject' => 'nullable|string|max:500',
        'abstract' => 'nullable|string',
        'description' => 'nullable|string',
        'state' => 'nullable|boolean',
        'published' => 'nullable|boolean',
        'circulation' => 'nullable|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
    public function itemType()
    {
        return $this->belongsTo(ItemType::class);
    }
}
