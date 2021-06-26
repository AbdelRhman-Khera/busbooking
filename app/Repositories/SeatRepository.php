<?php

namespace App\Repositories;

use App\Models\Seat;
use App\Repositories\BaseRepository;

/**
 * Class SeatRepository
 * @package App\Repositories
 * @version June 26, 2021, 3:13 pm UTC
*/

class SeatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number',
        'bus_id',
        'schedule_id'
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
        return Seat::class;
    }
}
