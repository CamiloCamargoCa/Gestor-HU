<div class="table-responsive">
    <table class="table" id="proyectos-table">
        <thead>
            <tr>
                <th>Id Proyecto</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Id Gerente</th>
                <th>Gerente</th>
                <th>Fech. Inicio Planeación</th>
                <th>Fech. Inicio Real</th>
                <th>Fech. Fin Planeación</th>
                <th>Fech. Fin Real</th>
                <th>Esfuerzo Planeado</th>
                <th>Esfuerzo Real</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proyectos as $proyectos)
            <tr>
                <td>{!! $proyectos->id !!}</td>
                <td>{!! $proyectos->cod_proyecto !!}</td>
                <td>{!! $proyectos->nombre !!}</td>
                <td>{!! $proyectos->id_gerente !!}</td>
                <td>{!! $proyectos->nombre_gerente !!}</td>
                <td>{!! $proyectos->fec_ini_planeada !!}</td>
                <td>{!! $proyectos->fec_ini_real !!}</td>
                <td>{!! $proyectos->fec_fin_planeada !!}</td>
                <td>{!! $proyectos->fec_fin_real !!}</td>
                <td>{!! $proyectos->esfu_planeado !!}</td>
                <td>{!! $proyectos->esfu_real !!}</td>
                <td>
                    {!! Form::open(['route' => ['proyectos.destroy', $proyectos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('proyectos.show', [$proyectos->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('proyectos.edit', [$proyectos->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
