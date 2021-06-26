<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Trip
 * @package App\Models
 * @version June 26, 2021, 2:47 pm UTC
 *
 * @property string $name
 */
class Trip extends Model
{


    public $table = 'trips';
    



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
