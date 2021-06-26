<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Seat
 * @package App\Models
 * @version June 26, 2021, 3:13 pm UTC
 *
 * @property \App\Models\Bus $bus
 * @property \App\Models\Schedule $schedule
 * @property integer $number
 * @property integer $bus_id
 * @property integer $schedule_id
 */
class Seat extends Model
{


    public $table = 'seats';
    



    public $fillable = [
        'number',
        'bus_id',
        'schedule_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number' => 'integer',
        'bus_id' => 'integer',
        'schedule_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number' => 'required',
        'bus_id' => 'required',
        'schedule_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bus()
    {
        return $this->belongsTo(\App\Models\Bus::class, 'bus_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function schedule()
    {
        return $this->belongsTo(\App\Models\Schedule::class, 'schedule_id', 'id');
    }
}
