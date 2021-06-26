<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Bus
 * @package App\Models
 * @version June 26, 2021, 1:40 pm UTC
 *
 * @property integer $number
 * @property string $name
 * @property integer $seats_num
 */
class Bus extends Model
{


    public $table = 'buses';
    



    public $fillable = [
        'number',
        'name',
        'seats_num'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number' => 'integer',
        'name' => 'string',
        'seats_num' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number' => 'required',
        'name' => 'required',
        'seats_num' => 'required'
    ];

    
}
