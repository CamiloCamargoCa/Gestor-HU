<div class="table-responsive">
    <table class="table" id="empleados-table">
        <thead>
            <tr>
                <th>Id Empleado</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Salario</th>
                <th>Estado</th>
                <th>Id Roll</th>
                <th>Id Proyecto</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($empleados as $empleados)
            <tr>
                <td>{!! $empleados->id !!}</td>
                <td>{!! $empleados->cedula !!}</td>
            <td>{!! $empleados->nombre !!}</td>
            <td>{!! $empleados->salario !!}</td>
            <td>{!! $empleados->estado_nombre !!}</td>
            {{-- <td>{!! $empleados->Estado !!}</td> --}}
            <td>{!! $empleados->rolle_nombre !!}</td>
            {{-- <td>{!! $empleados->id_roll !!}</td> --}}
            <td>{!! $empleados->proyecto_nombre !!}</td>
            {{-- <td>{!! $empleados->id_proyecto !!}</td> --}}
                <td>
                    {!! Form::open(['route' => ['empleados.destroy', $empleados->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('empleados.show', [$empleados->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('empleados.edit', [$empleados->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
