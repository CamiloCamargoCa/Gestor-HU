<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRollesRequest;
use App\Http\Requests\UpdateRollesRequest;
use App\Repositories\RollesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RollesController extends AppBaseController
{
    /** @var  RollesRepository */
    private $rollesRepository;

    public function __construct(RollesRepository $rollesRepo)
    {
        $this->rollesRepository = $rollesRepo;
    }

    /**
     * Display a listing of the Rolles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rolles = $this->rollesRepository->all();

        //devuelve la categoria de un producto
        $proy_items_id=[];
        foreach ($rolles as $key => $rolle) {
            $proy_items_id[]=$rolle->id_proyecto;
        }

        $proyectos = \App\Models\Proyectos::whereIn('id',$proy_items_id)->select('nombre','id')->get();
        foreach ($rolles as $key => $rolle) {
            foreach ($proyectos as $key2 => $proyecto) {
                if ($rolle->id_proyecto==$proyecto->id) {
                    $rolles[$key]->proyecto_nombre = $proyecto->nombre;
                }
            }
        }

        return view('rolles.index')
            ->with('rolles', $rolles);
    }

    /**
     * Show the form for creating a new Rolles.
     *
     * @return Response
     */
    public function create()
    {
        // trae los proyectos
        $proyectos = \App\Models\Proyectos::pluck('nombre','id');

        return view('rolles.create')->with(['proyectos'=>$proyectos]);
    }

    /**
     * Store a newly created Rolles in storage.
     *
     * @param CreateRollesRequest $request
     *
     * @return Response
     */
    public function store(CreateRollesRequest $request)
    {
        $input = $request->all();

        $rolles = $this->rollesRepository->create($input);

        Flash::success('Rolles saved successfully.');

        return redirect(route('rolles.index'));
    }

    /**
     * Display the specified Rolles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rolles = $this->rollesRepository->find($id);

        if (empty($rolles)) {
            Flash::error('Rolles not found');

            return redirect(route('rolles.index'));
        }

        //nombre de proyectos
        $proyectos = \App\Models\Proyectos::where('id',$rolles->id_proyecto)->select('nombre','id')->first();
        $rolles->proyecto_nombre = $proyectos->nombre ?? '';

        return view('rolles.show')->with('rolles', $rolles);
    }

    /**
     * Show the form for editing the specified Rolles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rolles = $this->rollesRepository->find($id);

        if (empty($rolles)) {
            Flash::error('Rolles not found');

            return redirect(route('rolles.index'));
        }
        // trae los proyectos
        $proyectos = \App\Models\Proyectos::pluck('nombre','id');


        return view('rolles.edit')->with(['rolles'=>$rolles,'proyectos'=>$proyectos]);
    }

    /**
     * Update the specified Rolles in storage.
     *
     * @param int $id
     * @param UpdateRollesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRollesRequest $request)
    {
        $rolles = $this->rollesRepository->find($id);

        if (empty($rolles)) {
            Flash::error('Rolles not found');

            return redirect(route('rolles.index'));
        }

        $rolles = $this->rollesRepository->update($request->all(), $id);

        Flash::success('Rolles updated successfully.');

        return redirect(route('rolles.index'));
    }

    /**
     * Remove the specified Rolles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rolles = $this->rollesRepository->find($id);

        if (empty($rolles)) {
            Flash::error('Rolles not found');

            return redirect(route('rolles.index'));
        }

        $this->rollesRepository->delete($id);

        Flash::success('Rolles deleted successfully.');

        return redirect(route('rolles.index'));
    }
}
