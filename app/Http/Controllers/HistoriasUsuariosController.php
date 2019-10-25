<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHistoriasUsuariosRequest;
use App\Http\Requests\UpdateHistoriasUsuariosRequest;
use App\Repositories\HistoriasUsuariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class HistoriasUsuariosController extends AppBaseController
{
    /** @var  HistoriasUsuariosRepository */
    private $historiasUsuariosRepository;

    public function __construct(HistoriasUsuariosRepository $historiasUsuariosRepo)
    {
        $this->historiasUsuariosRepository = $historiasUsuariosRepo;
    }

    /**
     * Display a listing of the HistoriasUsuarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $historiasUsuarios = $this->historiasUsuariosRepository->all();


        //devuelve la categoria de un producto
        $proy_items_id=[];
        $roll_items_id=[];
        $histo_items_id=[];
        foreach ($historiasUsuarios as $key => $historiasUsuario) {
            $proy_items_id[]=$historiasUsuario->id_proyecto;
            $roll_items_id[]=$historiasUsuario->roll_id;
            $histo_items_id[]=$historiasUsuario->dependencia;
        }

        $proyectos = \App\Models\Proyectos::whereIn('id',$proy_items_id)->select('nombre','id')->get();
        $rolles = \App\Models\Rolles::whereIn('id',$roll_items_id)->select('nombre','id')->get();
        $historias = \App\Models\HistoriasUsuarios::whereIn('id',$histo_items_id)->select('titulo_historia','id')->get();

        foreach ($historiasUsuarios as $key => $historiasUsuario) {
            foreach ($proyectos as $key2 => $proyecto) {
                if ($historiasUsuario->id_proyecto==$proyecto->id) {
                    $historiasUsuarios[$key]->proyecto_nombre = $proyecto->nombre;
                }
            }
        }

        foreach ($historiasUsuarios as $key => $historiasUsuario) {
            foreach ($rolles as $key2 => $rolle) {
                if ($historiasUsuario->roll_id==$rolle->id) {
                    $historiasUsuarios[$key]->rolle_nombre = $rolle->nombre;
                }
            }
        }

        foreach ($historiasUsuarios as $key => $historiasUsuario) {
            foreach ($historias as $key2 => $historia) {
                if ($historiasUsuario->dependencia==$historia->id) {
                    $historiasUsuarios[$key]->historia_nombre = $historia->titulo_historia;
                }
            }
        }

        return view('historias_usuarios.index')
            ->with('historiasUsuarios', $historiasUsuarios);
    }

    /**
     * Show the form for creating a new HistoriasUsuarios.
     *
     * @return Response
     */
    public function create()
    {
        // trae los proyectos
        $proyectos = \App\Models\Proyectos::pluck('nombre','id');

        // // trae los roles
        // $roles = config('options.scrum_roles');

        // trae los Rolles
        $rolles = \App\Models\Rolles::pluck('nombre','id');

        // trae otras historias de usuario
        $historias = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');

        return view('historias_usuarios.create')->with(['proyectos'=>$proyectos,'rolles'=>$rolles,'historias'=>$historias]);
    }

    /**
     * Store a newly created HistoriasUsuarios in storage.
     *
     * @param CreateHistoriasUsuariosRequest $request
     *
     * @return Response
     */
    public function store(CreateHistoriasUsuariosRequest $request)
    {
        $input = $request->all();

        $historiasUsuarios = $this->historiasUsuariosRepository->create($input);

        if ($request->file('reque_interfaz')) {
            $path = Storage::disk('public')->put('RequeInterfaz/'.$historiasUsuarios->id,$request->file('reque_interfaz'));
            $historiasUsuarios->fill(['image'=>asset($path)])->save();
        }

        if ($request->file('reque_interfaz')) {
            $historiasUsuarios = \App\Models\HistoriasUsuarios::findOrFail($historiasUsuarios->id);
            $historiasUsuarios->reque_interfaz = $path;
            $historiasUsuarios->save();
        }

        Flash::success('Historias Usuarios saved successfully.');

        return redirect(route('historiasUsuarios.index'));
    }

    /**
     * Display the specified HistoriasUsuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $historiasUsuarios = $this->historiasUsuariosRepository->find($id);

        if (empty($historiasUsuarios)) {
            Flash::error('Historias Usuarios not found');

            return redirect(route('historiasUsuarios.index'));
        }

        //nombre de proyectos
        $proyectos = \App\Models\Proyectos::where('id',$historiasUsuarios->id_proyecto)->select('nombre','id')->first();
        $historiasUsuarios->proyecto_nombre = $proyectos->nombre ?? '';

        //nombre de historias
        $historias = \App\Models\HistoriasUsuarios::where('id',$historiasUsuarios->dependencia)->select('titulo_historia','id')->first();
        $historiasUsuarios->historia_nombre = $historias->titulo_historia ?? '';

        //nombre de roll
        $rolles = \App\Models\Rolles::where('id',$historiasUsuarios->roll_id)->select('nombre','id')->first();
        $historiasUsuarios->roll_nombre = $rolles->nombre ?? '';

        return view('historias_usuarios.show')->with('historiasUsuarios', $historiasUsuarios);
    }

    /**
     * Show the form for editing the specified HistoriasUsuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $historiasUsuarios = $this->historiasUsuariosRepository->find($id);

        if (empty($historiasUsuarios)) {
            Flash::error('Historias Usuarios not found');

            return redirect(route('historiasUsuarios.index'));
        }

        // trae los proyectos
        $proyectos = \App\Models\Proyectos::pluck('nombre','id');

        // // trae los roles
        // $roles = config('options.scrum_roles');

        // trae los Rolles
        $rolles = \App\Models\Rolles::pluck('nombre','id');

        // trae otras historias de usuario
        $historias = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');

        return view('historias_usuarios.edit')->with(['historiasUsuarios'=>$historiasUsuarios,'proyectos'=>$proyectos,'rolles'=>$rolles,'historias'=>$historias]);
    }

    /**
     * Update the specified HistoriasUsuarios in storage.
     *
     * @param int $id
     * @param UpdateHistoriasUsuariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHistoriasUsuariosRequest $request)
    {
        $historiasUsuarios = $this->historiasUsuariosRepository->find($id);

        if (empty($historiasUsuarios)) {
            Flash::error('Historias Usuarios not found');

            return redirect(route('historiasUsuarios.index'));
        }

        $historiasUsuarios = $this->historiasUsuariosRepository->update($request->all(), $id);

        if ($request->file('reque_interfaz')) {
            $path = Storage::disk('public')->put('RequeInterfaz/'.$historiasUsuarios->id,$request->file('reque_interfaz'));
            $historiasUsuarios->fill(['image'=>asset($path)])->save();
        }

        if ($request->file('reque_interfaz')) {
            $historiasUsuarios = \App\Models\HistoriasUsuarios::findOrFail($historiasUsuarios->id);
            $historiasUsuarios->reque_interfaz = $path;
            $historiasUsuarios->save();
        }

        Flash::success('Historias Usuarios updated successfully.');

        return redirect(route('historiasUsuarios.index'));
    }

    /**
     * Remove the specified HistoriasUsuarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $historiasUsuarios = $this->historiasUsuariosRepository->find($id);

        if (empty($historiasUsuarios)) {
            Flash::error('Historias Usuarios not found');

            return redirect(route('historiasUsuarios.index'));
        }

        $this->historiasUsuariosRepository->delete($id);

        Flash::success('Historias Usuarios deleted successfully.');

        return redirect(route('historiasUsuarios.index'));
    }
}
