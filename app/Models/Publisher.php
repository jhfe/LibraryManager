<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Publisher
 * @package App\Models
 * @version October 4, 2021, 10:28 pm UTC
 *
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $website
 * @property boolean $state
 */
class Publisher extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'publishers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'country',
        'website',
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
        'address' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'country' => 'string',
        'website' => 'string',
        'state' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:500',
        'email' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:255',
        'country' => 'nullable|string|max:255',
        'website' => 'nullable|string|max:255',
        'state' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
