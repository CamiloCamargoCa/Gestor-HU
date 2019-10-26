<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProyectosRequest;
use App\Http\Requests\UpdateProyectosRequest;
use App\Repositories\ProyectosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProyectosController extends AppBaseController
{
    /** @var  ProyectosRepository */
    private $proyectosRepository;

    public function __construct(ProyectosRepository $proyectosRepo)
    {
        $this->proyectosRepository = $proyectosRepo;
    }

    /**
     * Display a listing of the Proyectos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $proyectos = $this->proyectosRepository->all();
        $proyectos = \App\Models\Proyectos::select('*');

        if (isset($request['name']) && $request['name'] != '') {
            $proyectos->where('nombre','like','%'.$request['name'].'%');
        }

        $proyectos = $proyectos->orderBy('nombre','asc')->paginate(20);

        return view('proyectos.index')
            ->with('proyectos', $proyectos);
    }

    /**
     * Show the form for creating a new Proyectos.
     *
     * @return Response
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created Proyectos in storage.
     *
     * @param CreateProyectosRequest $request
     *
     * @return Response
     */
    public function store(CreateProyectosRequest $request)
    {
        $input = $request->all();

        $proyectos = $this->proyectosRepository->create($input);

        Flash::success('Proyectos saved successfully.');

        return redirect(route('proyectos.index'));
    }

    /**
     * Display the specified Proyectos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proyectos = $this->proyectosRepository->find($id);

        if (empty($proyectos)) {
            Flash::error('Proyectos not found');

            return redirect(route('proyectos.index'));
        }

        return view('proyectos.show')->with('proyectos', $proyectos);
    }

    /**
     * Show the form for editing the specified Proyectos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $proyectos = $this->proyectosRepository->find($id);

        if (empty($proyectos)) {
            Flash::error('Proyectos not found');

            return redirect(route('proyectos.index'));
        }

        return view('proyectos.edit')->with('proyectos', $proyectos);
    }

    /**
     * Update the specified Proyectos in storage.
     *
     * @param int $id
     * @param UpdateProyectosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProyectosRequest $request)
    {
        $proyectos = $this->proyectosRepository->find($id);

        if (empty($proyectos)) {
            Flash::error('Proyectos not found');

            return redirect(route('proyectos.index'));
        }

        $proyectos = $this->proyectosRepository->update($request->all(), $id);

        Flash::success('Proyectos updated successfully.');

        return redirect(route('proyectos.index'));
    }

    /**
     * Remove the specified Proyectos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proyectos = $this->proyectosRepository->find($id);

        if (empty($proyectos)) {
            Flash::error('Proyectos not found');

            return redirect(route('proyectos.index'));
        }

        $this->proyectosRepository->delete($id);

        Flash::success('Proyectos deleted successfully.');

        return redirect(route('proyectos.index'));
    }
}
