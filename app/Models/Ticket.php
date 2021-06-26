<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Ticket
 * @package App\Models
 * @version June 26, 2021, 3:25 pm UTC
 *
 * @property \App\Models\Schedule $schedule
 * @property \App\Models\Bus $bus
 * @property \App\Models\Seat $seat
 * @property integer $schedule_id
 * @property integer $seat_id
 * @property integer $bus_id
 */
class Ticket extends Model
{


    public $table = 'tickets';
    



    public $fillable = [
        'schedule_id',
        'seat_id',
        'bus_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'schedule_id' => 'integer',
        'seat_id' => 'integer',
        'bus_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'schedule_id' => 'required',
        'seat_id' => 'required',
        'bus_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function schedule()
    {
        return $this->belongsTo(\App\Models\Schedule::class, 'schedule_id', 'id');
    }

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
    public function seat()
    {
        return $this->belongsTo(\App\Models\Seat::class, 'seat_id', 'id');
    }
}
