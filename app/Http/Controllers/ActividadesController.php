<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActividadesRequest;
use App\Http\Requests\UpdateActividadesRequest;
use App\Repositories\ActividadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Flash;
use Response;

class ActividadesController extends AppBaseController
{
    /** @var  ActividadesRepository */
    private $actividadesRepository;

    public function __construct(ActividadesRepository $actividadesRepo)
    {
        $this->actividadesRepository = $actividadesRepo;
    }

    /**
     * Display a listing of the Actividades.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $actividades = $this->actividadesRepository->all();

        //devuelve la categoria de un producto
        $proy_items_id=[];
        $histo_items_id=[];
        $user_items_id=[];
        foreach ($actividades as $key => $actividade) {
            $proy_items_id[]=$actividade->cód_proyecto;
            $histo_items_id[]=$actividade->id_pbi;
            $user_items_id[]=$actividade->id_ingeniero;
            // $histo_items_id[]=$historiasUsuario->dependencia;
        }

        $proyectos = \App\Models\Proyectos::whereIn('id',$proy_items_id)->select('nombre','id')->get();
        $historias = \App\Models\HistoriasUsuarios::whereIn('id',$histo_items_id)->select('titulo_historia','id')->get();
        $usuarios = \App\Models\Users::whereIn('id',$user_items_id)->select('name','id')->get();

        foreach ($actividades as $key => $actividade) {
            foreach ($proyectos as $key2 => $proyecto) {
                if ($actividade->cód_proyecto==$proyecto->id) {
                    $actividades[$key]->proyecto_nombre = $proyecto->nombre;
                }
            }
        }

        // mostrar historias de usuario
         foreach ($actividades as $key => $actividade) {
            foreach ($historias as $key2 => $historia) {
                if ($actividade->id_pbi==$historia->id) {
                    $actividades[$key]->historia_nombre = $historia->titulo_historia;
                }
            }
        }

        // mostrar usuario de auditoria
         foreach ($actividades as $key => $actividade) {
            foreach ($usuarios as $key2 => $usuario) {
                if ($actividade->id_usuario==$usuario->id) {
                    $actividades[$key]->usuario_nombre = $usuario->name;
                }
            }
        }
        // echo '<pre>';
        // print_r($actividades);
        // exit;

        return view('actividades.index')
            ->with('actividades', $actividades);
    }

    /**
     * Show the form for creating a new Actividades.
     *
     * @return Response
     */
    public function create()
    {
        // user
        $user = \App\Models\Usuarios::join('users','users.id','user_id')->pluck('name','user_id');
         // trae otras historias de usuario
        $historias = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');
        // proyectos
        $proyectos = \App\Models\Proyectos::pluck('cod_proyecto','id');
        return view('actividades.create')->with(['proyectos'=>$proyectos,'historias'=>$historias,'user'=>$user]);
    }

    /**
     * Store a newly created Actividades in storage.
     *
     * @param CreateActividadesRequest $request
     *
     * @return Response
     */
    public function store(CreateActividadesRequest $request)
    {
        $input = $request->all();
        $contHoras=0;
        $idHoras=0;
        
        $actividades = $this->actividadesRepository->create($input);

        // horas
        $datahoras = \App\Models\HistoriasDetalle::where('id_historia',$request['id_pbi'])->pluck('esfuerzo_horas','id');
        foreach ($datahoras as $key => $value) {
            $contHoras = $value;
            $idHoras = $key;
        }
        $contHoras = $contHoras + $request['hras_esfuerzo'];

        \App\Models\historiasDetalle::where('id', $idHoras)->update(['esfuerzo_horas' => $contHoras]);

        Flash::success('Actividades saved successfully.');

        return redirect(route('actividades.index'));
    }

    /**
     * Display the specified Actividades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actividades = $this->actividadesRepository->find($id);

        if (empty($actividades)) {
            Flash::error('Actividades not found');

            return redirect(route('actividades.index'));
        }

        return view('actividades.show')->with('actividades', $actividades);
    }

    /**
     * Show the form for editing the specified Actividades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actividades = $this->actividadesRepository->find($id);

        if (empty($actividades)) {
            Flash::error('Actividades not found');

            return redirect(route('actividades.index'));
        }

        // user
        $user = \App\Models\Usuarios::join('users','users.id','user_id')->pluck('name','user_id');
        // trae otras historias de usuario
        $historias = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');
        // proyectos
        $proyectos = \App\Models\Proyectos::pluck('cod_proyecto','id');
        return view('actividades.edit')->with(['actividades'=>$actividades,'proyectos'=>$proyectos,'historias'=>$historias,'user'=>$user]);
    }

    /**
     * Update the specified Actividades in storage.
     *
     * @param int $id
     * @param UpdateActividadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActividadesRequest $request)
    {
        $actividades = $this->actividadesRepository->find($id);

        if (empty($actividades)) {
            Flash::error('Actividades not found');

            return redirect(route('actividades.index'));
        }

        $contHoras=0;
        $idHoras=0;
        $sumHoras=0;
        $contTotalHoras=0;


        // echo '<pre>';
        // print_r($request->all());
        // exit;


        $sumHoras = \App\Models\HistoriasDetalle::where('id_historia',$request['id_pbi'])->select(DB::raw('sum(esfuerzo_horas) as horas'))->get();

        foreach ($sumHoras as $key1 => $value1) {
            $contTotalHoras = $value1->horas;
        }

         // horas
        $datahoras = \App\Models\Actividades::where('id',$id)->pluck('hras_esfuerzo','id');
        foreach ($datahoras as $key => $value) {
            $contHoras = $value;
            $idHoras = $key;
        }


        $contTotalHoras = $contTotalHoras - $contHoras;
        $contTotalHoras = $contTotalHoras + $request['hras_esfuerzo'];

        
        // print_r($contTotalHoras);
        // exit;

        \App\Models\historiasDetalle::where('id_historia',$request['id_pbi'])->update(['esfuerzo_horas' => $contTotalHoras]);

        $actividades = $this->actividadesRepository->update($request->all(), $id);
        Flash::success('Actividades updated successfully.');

        return redirect(route('actividades.index'));
    }

    /**
     * Remove the specified Actividades from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actividades = $this->actividadesRepository->find($id);

        if (empty($actividades)) {
            Flash::error('Actividades not found');

            return redirect(route('actividades.index'));
        }

        $this->actividadesRepository->delete($id);

        Flash::success('Actividades deleted successfully.');

        return redirect(route('actividades.index'));
    }
}
