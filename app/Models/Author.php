<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Author
 * @package App\Models
 * @version October 4, 2021, 10:26 pm UTC
 *
 * @property string $nickname
 * @property string $name
 * @property string $country
 * @property string $year_born
 * @property string $year_died
 * @property string $biography
 * @property string $publications
 * @property string $awards
 * @property string $reference
 * @property boolean $state
 */
class Author extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'authors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nickname',
        'name',
        'country',
        'year_born',
        'year_died',
        'biography',
        'publications',
        'awards',
        'reference',
        'state'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nickname' => 'string',
        'name' => 'string',
        'country' => 'string',
        'year_born' => 'date',
        'year_died' => 'date',
        'biography' => 'string',
        'publications' => 'string',
        'awards' => 'string',
        'reference' => 'string',
        'state' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nickname' => 'nullable|string|max:500',
        'name' => 'nullable|string|max:500',
        'country' => 'nullable|string|max:255',
        'year_born' => 'nullable',
        'year_died' => 'nullable',
        'biography' => 'nullable|string',
        'publications' => 'nullable|string',
        'awards' => 'nullable|string',
        'reference' => 'nullable|string',
        'state' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
