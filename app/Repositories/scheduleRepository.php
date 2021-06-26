<?php

namespace App\Repositories;

use App\Models\Reservation;
use App\Models\schedule;
use App\Models\Seat;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

/**
 * Class scheduleRepository
 * @package App\Repositories
 * @version June 26, 2021, 3:05 pm UTC
*/

class scheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'bus_id',
        'trip_id',
        'date'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return schedule::class;
    }

    public function createschedule(Request $request )
    {
        // dd($request);
        $input = $request->all();
        $schedule=$this->create($input);

        for ($i=0; $i < $schedule->bus->seats_num; $i++) {
            $seat = new Seat();
            $seat->bus_id = $schedule->bus_id;
            $seat->schedule_id = $schedule->id;
            $seat->number = $i+1;
            $seat->save();
            foreach ($schedule->trip->lines as $key => $line) {
                $res = new Reservation();
                $res->seat_id = $seat->id;
                $res->line_id = $line->id;
                $res->start = $line->start;
                $res->end = $line->end;
                $res->available = 0;
                $res->save();
            }
        }
        return $schedule;

    }
}
