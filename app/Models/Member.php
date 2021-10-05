<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Member
 * @package App\Models
 * @version October 4, 2021, 10:27 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $citizen_card
 * @property string $phone
 * @property string $address
 * @property string $zip_code
 * @property string $location
 * @property boolean $state_login
 * @property integer $type_menber_id
 * @property integer $menber_group_id
 * @property boolean $state
 */
class Member extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'members';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'citizen_card',
        'phone',
        'address',
        'zip_code',
        'location',
        'state_login',
        'type_menber_id',
        'menber_group_id',
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
        'email' => 'string',
        'citizen_card' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'zip_code' => 'string',
        'location' => 'string',
        'state_login' => 'boolean',
        'type_menber_id' => 'integer',
        'menber_group_id' => 'integer',
        'state' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:500',
        'email' => 'nullable|string|max:255',
        'citizen_card' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:500',
        'zip_code' => 'nullable|string|max:255',
        'location' => 'nullable|string|max:255',
        'state_login' => 'nullable|boolean',
        'type_menber_id' => 'nullable|integer',
        'menber_group_id' => 'nullable|integer',
        'state' => 'nullable|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
