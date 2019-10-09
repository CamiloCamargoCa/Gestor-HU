<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHistoriasDetalleRequest;
use App\Http\Requests\UpdateHistoriasDetalleRequest;
use App\Repositories\HistoriasDetalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HistoriasDetalleController extends AppBaseController
{
    /** @var  HistoriasDetalleRepository */
    private $historiasDetalleRepository;

    public function __construct(HistoriasDetalleRepository $historiasDetalleRepo)
    {
        $this->historiasDetalleRepository = $historiasDetalleRepo;
    }

    /**
     * Display a listing of the HistoriasDetalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $historiasDetalles = $this->historiasDetalleRepository->all();

        return view('historias_detalles.index')
            ->with('historiasDetalles', $historiasDetalles);
    }

    /**
     * Show the form for creating a new HistoriasDetalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('historias_detalles.create');
    }

    /**
     * Store a newly created HistoriasDetalle in storage.
     *
     * @param CreateHistoriasDetalleRequest $request
     *
     * @return Response
     */
    public function store(CreateHistoriasDetalleRequest $request)
    {
        $input = $request->all();

        $historiasDetalle = $this->historiasDetalleRepository->create($input);

        Flash::success('Historias Detalle saved successfully.');

        return redirect(route('historiasDetalles.index'));
    }

    /**
     * Display the specified HistoriasDetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $historiasDetalle = $this->historiasDetalleRepository->find($id);

        if (empty($historiasDetalle)) {
            Flash::error('Historias Detalle not found');

            return redirect(route('historiasDetalles.index'));
        }

        return view('historias_detalles.show')->with('historiasDetalle', $historiasDetalle);
    }

    /**
     * Show the form for editing the specified HistoriasDetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $historiasDetalle = $this->historiasDetalleRepository->find($id);

        if (empty($historiasDetalle)) {
            Flash::error('Historias Detalle not found');

            return redirect(route('historiasDetalles.index'));
        }

        return view('historias_detalles.edit')->with('historiasDetalle', $historiasDetalle);
    }

    /**
     * Update the specified HistoriasDetalle in storage.
     *
     * @param int $id
     * @param UpdateHistoriasDetalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHistoriasDetalleRequest $request)
    {
        $historiasDetalle = $this->historiasDetalleRepository->find($id);

        if (empty($historiasDetalle)) {
            Flash::error('Historias Detalle not found');

            return redirect(route('historiasDetalles.index'));
        }

        $historiasDetalle = $this->historiasDetalleRepository->update($request->all(), $id);

        Flash::success('Historias Detalle updated successfully.');

        return redirect(route('historiasDetalles.index'));
    }

    /**
     * Remove the specified HistoriasDetalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $historiasDetalle = $this->historiasDetalleRepository->find($id);

        if (empty($historiasDetalle)) {
            Flash::error('Historias Detalle not found');

            return redirect(route('historiasDetalles.index'));
        }

        $this->historiasDetalleRepository->delete($id);

        Flash::success('Historias Detalle deleted successfully.');

        return redirect(route('historiasDetalles.index'));
    }
}
