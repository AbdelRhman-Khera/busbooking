<?php

namespace App\Repositories;

use App\Models\Line;
use App\Models\Trip;
use App\Models\TripLines;
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

        $lines = $request->lines;

        foreach ($lines as $key => $line) {
            $data = new TripLines();
            $data->trip_id = $trip->id;
            $data->line_id = $line;
            $data->save();
        }
        return $trip;

    }
}
