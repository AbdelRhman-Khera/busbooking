<?php

namespace App\Models;

use Eloquent as Model;


class Line extends Model
{


    public $table = 'lines';


    protected $with=['starts','ends'];

    public $fillable = [
        'start',
        'end',
        'trip_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'start' => 'integer',
        'end' => 'integer',
        'trip_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'trip_id' => 'required',
        'start' => 'required',
        'end' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function starts()
    {
        return $this->belongsTo(\App\Models\Station::class, 'start', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ends()
    {
        return $this->belongsTo(\App\Models\Station::class, 'end', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function trips()
    {
        return $this->belongsTo(\App\Models\Trip::class, 'trip_id', 'id');
    }
}
