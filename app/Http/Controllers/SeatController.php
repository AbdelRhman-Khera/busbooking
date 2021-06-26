<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSeatRequest;
use App\Http\Requests\UpdateSeatRequest;
use App\Repositories\SeatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SeatController extends AppBaseController
{
    /** @var  SeatRepository */
    private $seatRepository;

    public function __construct(SeatRepository $seatRepo)
    {
        $this->seatRepository = $seatRepo;
    }

    /**
     * Display a listing of the Seat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $seats = $this->seatRepository->paginate(10);

        return view('seats.index')
            ->with('seats', $seats);
    }

    /**
     * Show the form for creating a new Seat.
     *
     * @return Response
     */
    public function create()
    {
        return view('seats.create');
    }

    /**
     * Store a newly created Seat in storage.
     *
     * @param CreateSeatRequest $request
     *
     * @return Response
     */
    public function store(CreateSeatRequest $request)
    {
        $input = $request->all();

        $seat = $this->seatRepository->create($input);

        Flash::success('Seat saved successfully.');

        return redirect(route('seats.index'));
    }

    /**
     * Display the specified Seat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $seat = $this->seatRepository->find($id);

        if (empty($seat)) {
            Flash::error('Seat not found');

            return redirect(route('seats.index'));
        }

        return view('seats.show')->with('seat', $seat);
    }

    /**
     * Show the form for editing the specified Seat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $seat = $this->seatRepository->find($id);

        if (empty($seat)) {
            Flash::error('Seat not found');

            return redirect(route('seats.index'));
        }

        return view('seats.edit')->with('seat', $seat);
    }

    /**
     * Update the specified Seat in storage.
     *
     * @param int $id
     * @param UpdateSeatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSeatRequest $request)
    {
        $seat = $this->seatRepository->find($id);

        if (empty($seat)) {
            Flash::error('Seat not found');

            return redirect(route('seats.index'));
        }

        $seat = $this->seatRepository->update($request->all(), $id);

        Flash::success('Seat updated successfully.');

        return redirect(route('seats.index'));
    }

    /**
     * Remove the specified Seat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $seat = $this->seatRepository->find($id);

        if (empty($seat)) {
            Flash::error('Seat not found');

            return redirect(route('seats.index'));
        }

        $this->seatRepository->delete($id);

        Flash::success('Seat deleted successfully.');

        return redirect(route('seats.index'));
    }
}
