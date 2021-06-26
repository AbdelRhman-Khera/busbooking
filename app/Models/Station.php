<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Station
 * @package App\Models
 * @version June 26, 2021, 1:37 pm UTC
 *
 * @property string $name
 */
class Station extends Model
{


    public $table = 'stations';
    



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
