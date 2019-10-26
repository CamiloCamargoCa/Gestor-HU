<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHistoriasDetalleRequest;
use App\Http\Requests\UpdateHistoriasDetalleRequest;
use App\Repositories\HistoriasDetalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;

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
        // $historiasDetalles = $this->historiasDetalleRepository->all();
        $historiasDetalles = \App\Models\HistoriasDetalle::select('*');
        if (isset($request['id']) && $request['id'] != '') {
            $historiasDetalles->where('id',$request['id']);
        }
        if (isset($request['tamano']) && $request['tamano'] != '') {
            $historiasDetalles->where('tamaño',$request['tamano']);
        }
        if (isset($request['estado']) && $request['estado'] != '') {
            $historiasDetalles->where('estado',$request['estado']);
        }
        if (isset($request['programer']) && $request['programer'] != '') {
            $historiasDetalles->where('id_desarrollador',$request['programer']);
        }
        if (isset($request['tester']) && $request['tester'] != '') {
            $historiasDetalles->where('id_tester',$request['tester']);
        }
        $historiasDetalles = $historiasDetalles->orderBy('id','asc')->paginate(20);

        //devuelve la categoria de un producto
        $histo_items_id=[];
        $tester_items_id=[];
        $programer_items_id=[];
        $user_items_id=[];
        $statu_items_id=[];
        foreach ($historiasDetalles as $key => $historiasDetalle) {
            $histo_items_id[]=$historiasDetalle->id_historia;
            $tester_items_id[]=$historiasDetalle->id_tester;
            $programer_items_id[]=$historiasDetalle->id_desarrollador;
            $user_items_id[]=$historiasDetalle->id_usuario;
            $statu_items_id[]=$historiasDetalle->programer;
        }

         $historias = \App\Models\HistoriasUsuarios::whereIn('id',$histo_items_id)->select('titulo_historia','id')->get();
         $testers = \App\Models\Users::whereIn('id',$tester_items_id)->select('name','id')->get();
         $programers = \App\Models\Users::whereIn('id',$programer_items_id)->select('name','id')->get();
         $usuarios = \App\Models\Users::whereIn('id',$user_items_id)->select('name','id')->get();

         // trae stados
        $status = config('options.status_hu');

         // mostrar historias de usuario
         foreach ($historiasDetalles as $key => $historiasDetalle) {
            foreach ($historias as $key2 => $historia) {
                if ($historiasDetalle->id_historia==$historia->id) {
                    $historiasDetalles[$key]->historia_nombre = $historia->titulo_historia;
                }
            }
        }

        // mostrar tester
         foreach ($historiasDetalles as $key => $historiasDetalle) {
            foreach ($testers as $key2 => $tester) {
                if ($historiasDetalle->id_tester==$tester->id) {
                    $historiasDetalles[$key]->tester_nombre = $tester->name;
                }
            }
        }

        // mostrar programadores
         foreach ($historiasDetalles as $key => $historiasDetalle) {
            foreach ($programers as $key2 => $programer) {
                if ($historiasDetalle->id_desarrollador==$programer->id) {
                    $historiasDetalles[$key]->programer_nombre = $programer->name;
                }
            }
        }

        // mostrar usuario de auditoria
         foreach ($historiasDetalles as $key => $historiasDetalle) {
            foreach ($usuarios as $key2 => $usuario) {
                if ($historiasDetalle->id_usuario==$usuario->id) {
                    $historiasDetalles[$key]->usuario_nombre = $usuario->name;
                }
            }
        }

        // mostrar usuario de auditoria
         foreach ($historiasDetalles as $key => $historiasDetalle) {
            foreach ($status as $key2 => $statu) {
                if ($historiasDetalle->estado==$key2) {
                    $historiasDetalles[$key]->statu_nombre = $statu;
                }
            }
        }

        // trae otras historias de usuario
        $historias1 = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');

        // trae el tamaño de la historia
        $tamano1 = config('options.tamano_estimado');

        // trae el estado de la historia
        $status_hu1 = config('options.status_hu');

        // tester
        $tester1 = \App\Models\Usuarios::join('users','users.id','user_id')->where('usuarios.operatividad',2)->pluck('name','user_id');

        // programador
        $programer1 = \App\Models\Usuarios::join('users','users.id','user_id')->where('usuarios.operatividad',1)->pluck('name','user_id');

        return view('historias_detalles.index')
            ->with(['historiasDetalles'=> $historiasDetalles,'historias1'=>$historias1,'tamano1'=>$tamano1,'status_hu1'=>$status_hu1,'tester1'=>$tester1,'programer1'=>$programer1]);
    }

    /**
     * Show the form for creating a new HistoriasDetalle.
     *
     * @return Response
     */
    public function create()
    {
         // trae otras historias de usuario
        $historias = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');

        // trae el tamaño de la historia
        $tamano = config('options.tamano_estimado');

        // trae el estado de la historia
        $status_hu = config('options.status_hu');

        // tester
        $tester = \App\Models\Usuarios::join('users','users.id','user_id')->where('usuarios.operatividad',2)->pluck('name','user_id');

        // programador
        $programer = \App\Models\Usuarios::join('users','users.id','user_id')->where('usuarios.operatividad',1)->pluck('name','user_id');

        // id usuario actual que crea el registro
        $value_id = Auth::id();
   
        return view('historias_detalles.create')->with(['historias'=>$historias,'tamano'=>$tamano,'status_hu'=>$status_hu,'tester'=>$tester,'programer'=>$programer,'value_id'=>$value_id]);
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

        //nombre de historias
        $historias = \App\Models\HistoriasUsuarios::where('id',$historiasDetalle->id_usuario)->select('titulo_historia','id')->first();
        $historiasDetalle->historia_nombre = $historias->titulo_historia ?? '';

         //nombre de usuarios
        $usuarios = \App\Models\Users::where('id',$historiasDetalle->id_usuario)->select('name','id')->first();
        $historiasDetalle->usuario_nombre = $usuarios->name ?? '';

         //nombre de testers
        $testers = \App\Models\Users::where('id',$historiasDetalle->id_tester)->select('name','id')->first();
        $historiasDetalle->tester_nombre = $testers->name ?? '';

         //nombre de testers
        $programers = \App\Models\Users::where('id',$historiasDetalle->id_desarrollador)->select('name','id')->first();
        $historiasDetalle->programer_nombre = $programers->name ?? '';

        // trae el estado de la historia
        $status_hu = config('options.status_hu');
        foreach ($status_hu as $key => $value) {
            if ($historiasDetalle->estado==$key) {
                $historiasDetalle->status_nombre = $value ?? '';
            }
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

        // trae otras historias de usuario
        $historias = \App\Models\HistoriasUsuarios::pluck('titulo_historia','id');

        // trae el tamaño de la historia
        $tamano = config('options.tamano_estimado');

        // trae el status de la historia
        $status_hu = config('options.status_hu');

        // tester
        $tester = \App\Models\Usuarios::join('users','users.id','user_id')->where('usuarios.operatividad',2)->pluck('name','user_id');

        // programador
        $programer = \App\Models\Usuarios::join('users','users.id','user_id')->where('usuarios.operatividad',1)->pluck('name','user_id');

        // id usuario actual que crea el registro
        $value_id = Auth::id();

        return view('historias_detalles.edit')->with(['historiasDetalle'=>$historiasDetalle,'historias'=>$historias,'tamano'=>$tamano,'status_hu'=>$status_hu,'tester'=>$tester,'programer'=>$programer,'value_id'=>$value_id]);
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
