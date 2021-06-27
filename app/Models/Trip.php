<?php

namespace App\Models;

use Eloquent as Model;

class Trip extends Model
{


    public $table = 'trips';




    public $fillable = [
        'name','start','end'
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
        'start' => 'required',
        'end' => 'required',
        'name' => 'required'
    ];

    public function lines()
    {
        return $this->belongsToMany(\App\Models\Line::class,'trip_lines');
    }

    public function starts()
    {
        return $this->belongsTo(\App\Models\Station::class, 'start', 'id');
    }


    public function ends()
    {
        return $this->belongsTo(\App\Models\Station::class, 'end', 'id');
    }

}
