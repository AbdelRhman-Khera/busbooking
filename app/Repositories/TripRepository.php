<?php

namespace App\Repositories;

use App\Models\Line;
use App\Models\Trip;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

/**
 * Class TripRepository
 * @package App\Repositories
 * @version June 26, 2021, 2:47 pm UTC
*/

class TripRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Trip::class;
    }

    public function createtrip(Request $request )
    {
        $input = $request->all();
        $trip=$this->create($input);

        $stations = $request->stations;

        for ($i=0; $i < count($stations)-1; $i++) {
            $line = new Line();
            $line->trip_id = $trip->id;
            $line->start = $stations[$i];
            $line->end = $stations[$i+1];
            $line->save();
        }
        return $trip;

    }
}
