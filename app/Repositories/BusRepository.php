<?php

namespace App\Repositories;

use App\Models\Bus;
use App\Repositories\BaseRepository;

/**
 * Class BusRepository
 * @package App\Repositories
 * @version June 26, 2021, 1:40 pm UTC
*/

class BusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number',
        'name',
        'seats_num'
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
        return Bus::class;
    }
}
