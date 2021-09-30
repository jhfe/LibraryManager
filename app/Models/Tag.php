<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tag
 * @package App\Models
 * @version September 29, 2021, 2:56 pm UTC
 *
 * @property string $name
 * @property string $slug
 * @property boolean $state
 */
class Tag extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tags';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'state'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'state' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:500',
        'slug' => 'nullable|string|max:500',
        'state' => 'required|boolean',
        'created_at' => 'nullable',
        'deleted_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
