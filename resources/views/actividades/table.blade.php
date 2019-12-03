<div class="table-responsive">
    <table class="table" id="actividades-table">
        <thead>
            <tr>
                <th>Código Proyecto</th>
                <th>Id HU</th>
                <th>Numero Sprint</th>
                <th>Nombre Actividad</th>
                <th>Id Ingeniero</th>
                <th>Fecha Inicial Real</th>
                <th>Horas Esfuerzo</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($actividades as $actividades)
            <tr>
                <td>{!! $actividades->proyecto_nombre !!}</td>
            <td>{!! $actividades->historia_nombre !!}</td>
            <td>{!! $actividades->num_sprint !!}</td>
            <td>{!! $actividades->nom_actividad !!}</td>
            <td>{!! $actividades->id_ingeniero !!}</td>
            <td>{!! $actividades->fech_ini_real !!}</td>
            <td>{!! $actividades->hras_esfuerzo !!}</td>
                <td>
                    {!! Form::open(['route' => ['actividades.destroy', $actividades->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('actividades.show', [$actividades->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('actividades.edit', [$actividades->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o"></i></a>
                        {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
