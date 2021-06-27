<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLineRequest;
use App\Http\Requests\UpdateLineRequest;
use App\Repositories\LineRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Station;
use Illuminate\Http\Request;
use Flash;
use Response;

class LineController extends AppBaseController
{
    /** @var  LineRepository */
    private $lineRepository;

    public function __construct(LineRepository $lineRepo)
    {
        $this->lineRepository = $lineRepo;
    }

    /**
     * Display a listing of the Line.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lines = $this->lineRepository->paginate(10);

        return view('lines.index')
            ->with('lines', $lines);
    }

    /**
     * Show the form for creating a new Line.
     *
     * @return Response
     */
    public function create()
    {
        $stations = Station::all();
        return view('lines.create',compact('stations'));
    }

    /**
     * Store a newly created Line in storage.
     *
     * @param CreateLineRequest $request
     *
     * @return Response
     */
    public function store(CreateLineRequest $request)
    {
        $input = $request->all();

        $line = $this->lineRepository->create($input);

        Flash::success('Line saved successfully.');

        return redirect(route('lines.index'));
    }

    /**
     * Display the specified Line.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $line = $this->lineRepository->find($id);

        if (empty($line)) {
            Flash::error('Line not found');

            return redirect(route('lines.index'));
        }

        return view('lines.show')->with('line', $line);
    }

    /**
     * Show the form for editing the specified Line.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $line = $this->lineRepository->find($id);

        if (empty($line)) {
            Flash::error('Line not found');

            return redirect(route('lines.index'));
        }

        return view('lines.edit')->with('line', $line);
    }

    /**
     * Update the specified Line in storage.
     *
     * @param int $id
     * @param UpdateLineRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLineRequest $request)
    {
        $line = $this->lineRepository->find($id);

        if (empty($line)) {
            Flash::error('Line not found');

            return redirect(route('lines.index'));
        }

        $line = $this->lineRepository->update($request->all(), $id);

        Flash::success('Line updated successfully.');

        return redirect(route('lines.index'));
    }

    /**
     * Remove the specified Line from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $line = $this->lineRepository->find($id);

        if (empty($line)) {
            Flash::error('Line not found');

            return redirect(route('lines.index'));
        }

        $this->lineRepository->delete($id);

        Flash::success('Line deleted successfully.');

        return redirect(route('lines.index'));
    }
}
