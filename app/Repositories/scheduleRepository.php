<?php

namespace App\Repositories;

use App\Models\schedule;
use App\Repositories\BaseRepository;

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
}
