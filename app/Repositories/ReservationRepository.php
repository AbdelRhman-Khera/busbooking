<?php

namespace App\Repositories;

use App\Models\Reservation;
use App\Repositories\BaseRepository;

/**
 * Class ReservationRepository
 * @package App\Repositories
 * @version June 26, 2021, 3:51 pm UTC
*/

class ReservationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'seat_id',
        'line_id',
        'start',
        'end',
        'ticket_id',
        'available'
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
        return Reservation::class;
    }
}
