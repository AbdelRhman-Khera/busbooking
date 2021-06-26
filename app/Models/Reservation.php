<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Reservation
 * @package App\Models
 * @version June 26, 2021, 3:51 pm UTC
 *
 * @property \App\Models\Seat $seat
 * @property \App\Models\Line $line
 * @property \App\Models\Ticket $ticket
 * @property \App\Models\Station $start
 * @property \App\Models\Station $end
 * @property integer $seat_id
 * @property integer $line_id
 * @property integer $start
 * @property integer $end
 * @property integer $ticket_id
 * @property integer $available
 */
class Reservation extends Model
{


    public $table = 'reservations';
    



    public $fillable = [
        'seat_id',
        'line_id',
        'start',
        'end',
        'ticket_id',
        'available'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'seat_id' => 'integer',
        'line_id' => 'integer',
        'start' => 'integer',
        'end' => 'integer',
        'ticket_id' => 'integer',
        'available' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'seat_id' => 'required',
        'line_id' => 'required',
        'start' => 'required',
        'end' => 'required',
        'ticket_id' => 'required',
        'available' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function seat()
    {
        return $this->belongsTo(\App\Models\Seat::class, 'seat_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function line()
    {
        return $this->belongsTo(\App\Models\Line::class, 'line_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ticket()
    {
        return $this->belongsTo(\App\Models\Ticket::class, 'ticket_id', 'id');
    }

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
}
