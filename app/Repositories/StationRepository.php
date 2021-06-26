<?php

namespace App\Repositories;

use App\Models\Station;
use App\Repositories\BaseRepository;

/**
 * Class StationRepository
 * @package App\Repositories
 * @version June 26, 2021, 1:37 pm UTC
*/

class StationRepository extends BaseRepository
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
        return Station::class;
    }
}
