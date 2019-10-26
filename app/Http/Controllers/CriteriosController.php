<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCriteriosRequest;
use App\Http\Requests\UpdateCriteriosRequest;
use App\Repositories\CriteriosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CriteriosController extends AppBaseController
{
    /** @var  CriteriosRepository */
    private $criteriosRepository;

    public function __construct(CriteriosRepository $criteriosRepo)
    {
        $this->criteriosRepository = $criteriosRepo;
    }

    /**
     * Display a listing of the Criterios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $criterios = $this->criteriosRepository->all();
        $criterios = \App\Models\Criterios::select('*');
        if (isset($request['proyectos1']) && $request['proyectos1'] != '') {
            $criterios->where('id_proyecto',$request['proyectos1']);
        }
        if (isset($request['historia1']) && $request['historia1'] != '') {
            $criterios->where('id_historia',$request['historia1']);
        }
        $criterios = $criterios->orderBy('id','asc')->paginate(20);

        //devuelve la categoria de un producto
        $proy_items_id=[];
        $histo_items_id=[];
        foreach ($criterios as $key => $criterio) {
            $proy_items_id[]=$criterio->id_proyecto;
            $histo_items_id[]=$criterio->id_historia;
        }

        $proyectos = \App\Models\Proyectos::whereIn('id',$proy_items_id)->select('nombre','id')->get();
        $historias = \App\Models\HistoriasUsuarios::whereIn('id',$histo_items_id)->select('titulo_historia','id')->get();

        foreach ($criterios as $key => $criterio) {
            foreach ($proyectos as $key2 => $proyecto) {
                if ($criterio->id_proyecto==$proyecto->id) {
                    $criterios[$key]->proyecto_nombre = $proyecto->nombre;
                }
            }
        }

        foreach ($criterios as $key => $criterio) {
            foreach ($historias as $key2 => $historia) {
                if ($criterio->id_historia==$historia->id) {
                    $criterios[$key]->historia_nombre = $historia->titulo_historia;
                }
            }
        }

        // trae los proyectos
        $proyectos1 = \App\Models\Proyectos::pluck('nombre','id');

        // trae otras historias de usuario
        $historias1 = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');

        return view('criterios.index')
            ->with(['criterios'=>$criterios,'proyectos1'=>$proyectos1,'historias1'=>$historias1]);
    }

    /**
     * Show the form for creating a new Criterios.
     *
     * @return Response
     */
    public function create()
    {
        // trae los proyectos
        $proyectos = \App\Models\Proyectos::pluck('nombre','id');

        // trae otras historias de usuario
        $historias = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');

        return view('criterios.create')->with(['historias'=>$historias,'proyectos'=>$proyectos]);
    }

    /**
     * Store a newly created Criterios in storage.
     *
     * @param CreateCriteriosRequest $request
     *
     * @return Response
     */
    public function store(CreateCriteriosRequest $request)
    {
        $input = $request->all();

        $criterios = $this->criteriosRepository->create($input);

        Flash::success('Criterios saved successfully.');

        return redirect(route('criterios.index'));
    }

    /**
     * Display the specified Criterios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $criterios = $this->criteriosRepository->find($id);

        if (empty($criterios)) {
            Flash::error('Criterios not found');

            return redirect(route('criterios.index'));
        }

        //nombre de proyectos
        $proyectos = \App\Models\Proyectos::where('id',$criterios->id_proyecto)->select('nombre','id')->first();
        $criterios->proyecto_nombre = $proyectos->nombre ?? '';

        //nombre de historias
        $historias = \App\Models\HistoriasUsuarios::where('id',$criterios->id_proyecto)->select('titulo_historia','id')->first();
        $criterios->historia_nombre = $historias->titulo_historia ?? '';

        return view('criterios.show')->with('criterios', $criterios);
    }

    /**
     * Show the form for editing the specified Criterios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $criterios = $this->criteriosRepository->find($id);

        if (empty($criterios)) {
            Flash::error('Criterios not found');

            return redirect(route('criterios.index'));
        }

        // trae los proyectos
        $proyectos = \App\Models\Proyectos::pluck('nombre','id');

        // trae otras historias de usuario
        $historias = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');

        return view('criterios.edit')->with(['criterios'=>$criterios,'historias'=>$historias,'proyectos'=>$proyectos]);
    }

    /**
     * Update the specified Criterios in storage.
     *
     * @param int $id
     * @param UpdateCriteriosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCriteriosRequest $request)
    {
        $criterios = $this->criteriosRepository->find($id);

        if (empty($criterios)) {
            Flash::error('Criterios not found');

            return redirect(route('criterios.index'));
        }

        $criterios = $this->criteriosRepository->update($request->all(), $id);

        Flash::success('Criterios updated successfully.');

        return redirect(route('criterios.index'));
    }

    /**
     * Remove the specified Criterios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $criterios = $this->criteriosRepository->find($id);

        if (empty($criterios)) {
            Flash::error('Criterios not found');

            return redirect(route('criterios.index'));
        }

        $this->criteriosRepository->delete($id);

        Flash::success('Criterios deleted successfully.');

        return redirect(route('criterios.index'));
    }
}
