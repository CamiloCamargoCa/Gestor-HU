<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use App\Repositories\UsuariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsuariosController extends AppBaseController
{
    /** @var  UsuariosRepository */
    private $usuariosRepository;

    public function __construct(UsuariosRepository $usuariosRepo)
    {
        $this->usuariosRepository = $usuariosRepo;
    }

    /**
     * Display a listing of the Usuarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usuarios = $this->usuariosRepository->all();

        //devuelve la categoria de un producto
        $usu_items_id=[];
        $roll_items_id=[];
        $ope_items_id=[];
       
        foreach ($usuarios as $key => $usuario) {
            $usu_items_id[]=$usuario->user_id;
            $roll_items_id[]=$usuario->roll_id;
            $ope_items_id[]=$usuario->operatividad;
        }

        $users = \App\Models\Users::whereIn('id',$usu_items_id)->select('name','id')->get();
        // $rolles = \App\Models\Rolles::whereIn('id',$roll_items_id)->select('nombre','id')->get();
        // // trae tipo operavilidad de usuario
        $operabilidad = config('options.Operability');

        foreach ($usuarios as $key => $usuario) {
            foreach ($users as $key2 => $user) {
                if ($usuario->user_id==$user->id) {
                    $usuarios[$key]->user_nombre = $user->name;
                }
            }
        }

        // foreach ($usuarios as $key => $usuario) {
        //     foreach ($rolles as $key2 => $rolle) {
        //         if ($usuario->roll_id==$rolle->id) {
        //             $usuarios[$key]->rolle_nombre = $rolle->nombre;
        //         }
        //     }
        // }

        foreach ($usuarios as $key => $usuario) {
            foreach ($operabilidad as $key2 => $ope) {
                if ($usuario->operatividad==$key2) {
                    $usuarios[$key]->ope_nombre = $ope;
                }
            }
        }

        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuarios.
     *
     * @return Response
     */
    public function create()
    {
        // trae los users
        $users = \App\Models\Users::pluck('name','id');

        // trae los Rolles
        // $rolles = \App\Models\Rolles::pluck('nombre','id');

        // // trae tipo operavilidad de usuario
        $operabilidad = config('options.Operability');

        return view('usuarios.create')->with(['users'=>$users,'operabilidad'=>$operabilidad]);
    }

    /**
     * Store a newly created Usuarios in storage.
     *
     * @param CreateUsuariosRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuariosRequest $request)
    {
        $input = $request->all();

        $usuarios = $this->usuariosRepository->create($input);

        Flash::success('Usuarios saved successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        //nombre de historias
        // $rolles = \App\Models\Rolles::where('id',$usuarios->roll_id)->select('nombre','id')->first();
        // $usuarios->roll_nombre = $rolles->nombre ?? '';

        //nombre de usuarios
        $users = \App\Models\Users::where('id',$usuarios->user_id)->select('name','id')->first();
        $usuarios->user_nombre = $users->name ?? '';

        // // trae tipo operavilidad de usuario
        $operabilidad = config('options.Operability');

        foreach ($operabilidad as $key2 => $ope) {
            if ($usuarios->operatividad==$key2) {
                $usuarios->ope_nombre = $ope;
            }
        }
        

        return view('usuarios.show')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for editing the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        // // trae tipo operavilidad de usuario
        $operabilidad = config('options.Operability');

        // trae los users
        $users = \App\Models\Users::pluck('name','id');

        // trae los Rolles
        // $rolles = \App\Models\Rolles::pluck('nombre','id');

        return view('usuarios.edit')->with(['usuarios'=>$usuarios,'users'=>$users,'operabilidad'=>$operabilidad]);
    }

    /**
     * Update the specified Usuarios in storage.
     *
     * @param int $id
     * @param UpdateUsuariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuariosRequest $request)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        $usuarios = $this->usuariosRepository->update($request->all(), $id);

        Flash::success('Usuarios updated successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified Usuarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        $this->usuariosRepository->delete($id);

        Flash::success('Usuarios deleted successfully.');

        return redirect(route('usuarios.index'));
    }
}
