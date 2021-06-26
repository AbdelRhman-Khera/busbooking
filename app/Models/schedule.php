<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class schedule
 * @package App\Models
 * @version June 26, 2021, 3:05 pm UTC
 *
 * @property \App\Models\Trip $trip
 * @property \App\Models\Bus $bus
 * @property string $name
 * @property integer $bus_id
 * @property integer $trip_id
 * @property string $date
 */
class schedule extends Model
{


    public $table = 'schedules';
    



    public $fillable = [
        'name',
        'bus_id',
        'trip_id',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'bus_id' => 'integer',
        'trip_id' => 'integer',
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'bus_id' => 'required',
        'trip_id' => 'required',
        'date' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function trip()
    {
        return $this->belongsTo(\App\Models\Trip::class, 'trip_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bus()
    {
        return $this->belongsTo(\App\Models\Bus::class, 'bus_id', 'id');
    }
}
