<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpleadosRequest;
use App\Http\Requests\UpdateEmpleadosRequest;
use App\Repositories\EmpleadosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EmpleadosController extends AppBaseController
{
    /** @var  EmpleadosRepository */
    private $empleadosRepository;

    public function __construct(EmpleadosRepository $empleadosRepo)
    {
        $this->empleadosRepository = $empleadosRepo;
    }

    /**
     * Display a listing of the Empleados.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $empleados = $this->empleadosRepository->all();
        $empleados = \App\Models\Empleados::select('*');
        if (isset($request['name']) && $request['name'] != '') {
            $empleados->where('nombre','like','%'.$request['name'].'%');
        }
        if (isset($request['cedula']) && $request['cedula'] != '') {
            $empleados->where('cedula','like','%'.$request['cedula'].'%');
        }
        if (isset($request['estado']) && $request['estado'] != '') {
            $empleados->where('Estado',$request['estado']);
        }
        if (isset($request['proyectos']) && $request['proyectos'] != '') {
            $empleados->where('id_proyecto',$request['proyectos']);
        }
        if (isset($request['rolles']) && $request['rolles'] != '') {
            $empleados->where('id_roll',$request['rolles']);
        }
        $empleados = $empleados->orderBy('nombre','asc')->paginate(20);

         //devuelve la categoria de un producto
        $proy_items_id=[];
        $roll_items_id=[];
        $estado_items_id=[];
        foreach ($empleados as $key => $empleado) {
            $proy_items_id[]=$empleado->id_proyecto;
            $roll_items_id[]=$empleado->id_roll;
            $estado_items_id[]=$empleado->Estado;
        }

        $proyectos = \App\Models\Proyectos::whereIn('id',$proy_items_id)->select('nombre','id')->get();
        $rolles = \App\Models\Rolles::whereIn('id',$roll_items_id)->select('nombre','id')->get();
        // // trae los roles
        $estadosemps = config('options.status_emp');

        // mostrar nombre proyectos
        foreach ($empleados as $key => $empleado) {
            foreach ($proyectos as $key2 => $proyecto) {
                if ($empleado->id_proyecto==$proyecto->id) {
                    $empleados[$key]->proyecto_nombre = $proyecto->nombre;
                }
            }
        }

        // mostrar nombre rolles
        foreach ($empleados as $key => $empleado) {
            foreach ($rolles as $key3 => $rolle) {
                if ($empleado->id_roll==$rolle->id) {
                    $empleados[$key]->rolle_nombre = $rolle->nombre;
                }
            }
        }

        // mostrar nombre rolles
        foreach ($empleados as $key => $empleado) {
            foreach ($estadosemps as $key4 => $estadosemp) {
                if ($empleado->Estado==$key4) {
                    $empleados[$key]->estado_nombre = $estadosemp;
                }
            }
        }

        // // trae los roles
        $estadosemp1 = config('options.status_emp');

        // trae los proyectos
        $proyectos1 = \App\Models\Proyectos::pluck('nombre','id');

        // trae los Rolles
        $rolles1 = \App\Models\Rolles::pluck('nombre','id');

        return view('empleados.index')
            ->with(['empleados'=>$empleados,'estadosemp1'=>$estadosemp1,'proyectos1'=>$proyectos1,'rolles1'=>$rolles1]);
    }

    /**
     * Show the form for creating a new Empleados.
     *
     * @return Response
     */
    public function create()
    {

         // trae los proyectos
        $proyectos = \App\Models\Proyectos::pluck('nombre','id');

        // // trae los roles
        $estadosemp = config('options.status_emp');

        // trae los Rolles
        $rolles = \App\Models\Rolles::pluck('nombre','id');

        return view('empleados.create')->with(['proyectos'=>$proyectos,'rolles'=>$rolles,'estadosemp'=>$estadosemp]);
    }

    /**
     * Store a newly created Empleados in storage.
     *
     * @param CreateEmpleadosRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpleadosRequest $request)
    {
        $input = $request->all();

        $empleados = $this->empleadosRepository->create($input);

        Flash::success('Empleados saved successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Display the specified Empleados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empleados = $this->empleadosRepository->find($id);

        if (empty($empleados)) {
            Flash::error('Empleados not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.show')->with('empleados', $empleados);
    }

    /**
     * Show the form for editing the specified Empleados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empleados = $this->empleadosRepository->find($id);

        if (empty($empleados)) {
            Flash::error('Empleados not found');

            return redirect(route('empleados.index'));
        }

         // trae los proyectos
        $proyectos = \App\Models\Proyectos::pluck('nombre','id');

        // // trae los roles
        $estadosemp = config('options.status_emp');

        // trae los Rolles
        $rolles = \App\Models\Rolles::pluck('nombre','id');

        return view('empleados.edit')->with(['empleados'=>$empleados,'proyectos'=>$proyectos,'rolles'=>$rolles,'estadosemp'=>$estadosemp]);
    }

    /**
     * Update the specified Empleados in storage.
     *
     * @param int $id
     * @param UpdateEmpleadosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpleadosRequest $request)
    {
        $empleados = $this->empleadosRepository->find($id);

        if (empty($empleados)) {
            Flash::error('Empleados not found');

            return redirect(route('empleados.index'));
        }

        $empleados = $this->empleadosRepository->update($request->all(), $id);

        Flash::success('Empleados updated successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Remove the specified Empleados from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empleados = $this->empleadosRepository->find($id);

        if (empty($empleados)) {
            Flash::error('Empleados not found');

            return redirect(route('empleados.index'));
        }

        $this->empleadosRepository->delete($id);

        Flash::success('Empleados deleted successfully.');

        return redirect(route('empleados.index'));
    }
}
