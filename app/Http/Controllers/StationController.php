<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStationRequest;
use App\Http\Requests\UpdateStationRequest;
use App\Repositories\StationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StationController extends AppBaseController
{
    /** @var  StationRepository */
    private $stationRepository;

    public function __construct(StationRepository $stationRepo)
    {
        $this->stationRepository = $stationRepo;
    }

    /**
     * Display a listing of the Station.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $stations = $this->stationRepository->paginate(10);

        return view('stations.index')
            ->with('stations', $stations);
    }

    /**
     * Show the form for creating a new Station.
     *
     * @return Response
     */
    public function create()
    {
        return view('stations.create');
    }

    /**
     * Store a newly created Station in storage.
     *
     * @param CreateStationRequest $request
     *
     * @return Response
     */
    public function store(CreateStationRequest $request)
    {
        $input = $request->all();

        $station = $this->stationRepository->create($input);

        Flash::success('Station saved successfully.');

        return redirect(route('stations.index'));
    }

    /**
     * Display the specified Station.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $station = $this->stationRepository->find($id);

        if (empty($station)) {
            Flash::error('Station not found');

            return redirect(route('stations.index'));
        }

        return view('stations.show')->with('station', $station);
    }

    /**
     * Show the form for editing the specified Station.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $station = $this->stationRepository->find($id);

        if (empty($station)) {
            Flash::error('Station not found');

            return redirect(route('stations.index'));
        }

        return view('stations.edit')->with('station', $station);
    }

    /**
     * Update the specified Station in storage.
     *
     * @param int $id
     * @param UpdateStationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStationRequest $request)
    {
        $station = $this->stationRepository->find($id);

        if (empty($station)) {
            Flash::error('Station not found');

            return redirect(route('stations.index'));
        }

        $station = $this->stationRepository->update($request->all(), $id);

        Flash::success('Station updated successfully.');

        return redirect(route('stations.index'));
    }

    /**
     * Remove the specified Station from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $station = $this->stationRepository->find($id);

        if (empty($station)) {
            Flash::error('Station not found');

            return redirect(route('stations.index'));
        }

        $this->stationRepository->delete($id);

        Flash::success('Station deleted successfully.');

        return redirect(route('stations.index'));
    }
}
