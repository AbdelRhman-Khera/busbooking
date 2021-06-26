<?php

namespace App\Repositories;

use App\Models\Line;
use App\Repositories\BaseRepository;

/**
 * Class LineRepository
 * @package App\Repositories
 * @version June 26, 2021, 2:53 pm UTC
*/

class LineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'start',
        'end',
        'trip_id'
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
        return Line::class;
    }
}
