<?php

namespace App\Models;

use Eloquent as Model;

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

    public function lines()
    {
        return $this->hasMany(\App\Models\Line::class);
    }

}
