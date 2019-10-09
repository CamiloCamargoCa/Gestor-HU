<div class="table-responsive">
    <table class="table" id="historiasDetalles-table">
        <thead>
            <tr>
                <th>Id Historia</th>
        <th>Tamaño</th>
        <th>Esfuerzo Horas</th>
        <th>Num Sprint</th>
        <th>Num Release</th>
        <th>Id Usuario</th>
        <th>Id Desarrollador</th>
        <th>Id Tester</th>
        <th>Estado</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($historiasDetalles as $historiasDetalle)
            <tr>
                <td>{!! $historiasDetalle->id_historia !!}</td>
            <td>{!! $historiasDetalle->tamaño !!}</td>
            <td>{!! $historiasDetalle->esfuerzo_horas !!}</td>
            <td>{!! $historiasDetalle->num_sprint !!}</td>
            <td>{!! $historiasDetalle->num_release !!}</td>
            <td>{!! $historiasDetalle->id_usuario !!}</td>
            <td>{!! $historiasDetalle->id_desarrollador !!}</td>
            <td>{!! $historiasDetalle->id_tester !!}</td>
            <td>{!! $historiasDetalle->estado !!}</td>
                <td>
                    {!! Form::open(['route' => ['historiasDetalles.destroy', $historiasDetalle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('historiasDetalles.show', [$historiasDetalle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('historiasDetalles.edit', [$historiasDetalle->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
