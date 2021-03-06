<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBusRequest;
use App\Http\Requests\UpdateBusRequest;
use App\Repositories\BusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BusController extends AppBaseController
{
    /** @var  BusRepository */
    private $busRepository;

    public function __construct(BusRepository $busRepo)
    {
        $this->busRepository = $busRepo;
    }

    /**
     * Display a listing of the Bus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $buses = $this->busRepository->paginate(10);

        return view('buses.index')
            ->with('buses', $buses);
    }

    /**
     * Show the form for creating a new Bus.
     *
     * @return Response
     */
    public function create()
    {
        return view('buses.create');
    }

    /**
     * Store a newly created Bus in storage.
     *
     * @param CreateBusRequest $request
     *
     * @return Response
     */
    public function store(CreateBusRequest $request)
    {
        $input = $request->all();

        $bus = $this->busRepository->create($input);

        Flash::success('Bus saved successfully.');

        return redirect(route('buses.index'));
    }

    /**
     * Display the specified Bus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bus = $this->busRepository->find($id);

        if (empty($bus)) {
            Flash::error('Bus not found');

            return redirect(route('buses.index'));
        }

        return view('buses.show')->with('bus', $bus);
    }

    /**
     * Show the form for editing the specified Bus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bus = $this->busRepository->find($id);

        if (empty($bus)) {
            Flash::error('Bus not found');

            return redirect(route('buses.index'));
        }

        return view('buses.edit')->with('bus', $bus);
    }

    /**
     * Update the specified Bus in storage.
     *
     * @param int $id
     * @param UpdateBusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBusRequest $request)
    {
        $bus = $this->busRepository->find($id);

        if (empty($bus)) {
            Flash::error('Bus not found');

            return redirect(route('buses.index'));
        }

        $bus = $this->busRepository->update($request->all(), $id);

        Flash::success('Bus updated successfully.');

        return redirect(route('buses.index'));
    }

    /**
     * Remove the specified Bus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bus = $this->busRepository->find($id);

        if (empty($bus)) {
            Flash::error('Bus not found');

            return redirect(route('buses.index'));
        }

        $this->busRepository->delete($id);

        Flash::success('Bus deleted successfully.');

        return redirect(route('buses.index'));
    }
}
