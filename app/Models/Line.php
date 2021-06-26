<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Line
 * @package App\Models
 * @version June 26, 2021, 2:53 pm UTC
 *
 * @property \App\Models\Station $start
 * @property \App\Models\Station $end
 * @property \App\Models\Trip $trip
 * @property integer $start
 * @property integer $end
 * @property integer $trip_id
 */
class Line extends Model
{


    public $table = 'lines';
    



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
        'start' => 'required',
        'end' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function start()
    {
        return $this->belongsTo(\App\Models\Station::class, 'start', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function end()
    {
        return $this->belongsTo(\App\Models\Station::class, 'end', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function trip()
    {
        return $this->belongsTo(\App\Models\Trip::class, 'trip_id', 'id');
    }
}
