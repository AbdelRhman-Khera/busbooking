<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatescheduleRequest;
use App\Http\Requests\UpdatescheduleRequest;
use App\Repositories\scheduleRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Http\Request;
use Flash;
use Response;

class scheduleController extends AppBaseController
{
    /** @var  scheduleRepository */
    private $scheduleRepository;

    public function __construct(scheduleRepository $scheduleRepo)
    {
        $this->scheduleRepository = $scheduleRepo;
    }

    /**
     * Display a listing of the schedule.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $schedules = $this->scheduleRepository->paginate(10);

        return view('schedules.index')
            ->with('schedules', $schedules);
    }

    /**
     * Show the form for creating a new schedule.
     *
     * @return Response
     */
    public function create()
    {
        $trips = Trip::all();
        $buses = Bus::all();
        return view('schedules.create',compact('trips','buses'));
    }

    /**
     * Store a newly created schedule in storage.
     *
     * @param CreatescheduleRequest $request
     *
     * @return Response
     */
    public function store(CreatescheduleRequest $request)
    {


        $schedule = $this->scheduleRepository->createschedule($request);

        Flash::success('Schedule saved successfully.');

        return redirect(route('schedules.index'));
    }

    /**
     * Display the specified schedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $schedule = $this->scheduleRepository->find($id);

        if (empty($schedule)) {
            Flash::error('Schedule not found');

            return redirect(route('schedules.index'));
        }

        return view('schedules.show')->with('schedule', $schedule);
    }

    /**
     * Show the form for editing the specified schedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trips = Trip::all();
        $buses = Bus::all();
        $schedule = $this->scheduleRepository->find($id);

        if (empty($schedule)) {
            Flash::error('Schedule not found');

            return redirect(route('schedules.index'));
        }

        return view('schedules.edit',compact('trips','buses'))->with('schedule', $schedule);
    }

    /**
     * Update the specified schedule in storage.
     *
     * @param int $id
     * @param UpdatescheduleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatescheduleRequest $request)
    {
        $schedule = $this->scheduleRepository->find($id);

        if (empty($schedule)) {
            Flash::error('Schedule not found');

            return redirect(route('schedules.index'));
        }

        $schedule = $this->scheduleRepository->update($request->all(), $id);

        Flash::success('Schedule updated successfully.');

        return redirect(route('schedules.index'));
    }

    /**
     * Remove the specified schedule from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $schedule = $this->scheduleRepository->find($id);

        if (empty($schedule)) {
            Flash::error('Schedule not found');

            return redirect(route('schedules.index'));
        }

        $this->scheduleRepository->delete($id);

        Flash::success('Schedule deleted successfully.');

        return redirect(route('schedules.index'));
    }
}
