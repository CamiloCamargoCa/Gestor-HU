<div class="table-responsive">
    <table class="table" id="historiasUsuarios-table">
        <thead>
            <tr>
                <th>Id Historia</th>
                <th>Proyecto</th>
        <th>Tipo Historia</th>
        <th>Titulo Historia</th>
        <th>Roll Id</th>
        <th>Descripcion</th>
        <th>Reque Interfaz</th>
        <th>Dependencia</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($historiasUsuarios as $historiasUsuarios)
            <tr>
                <td>{!! $historiasUsuarios->id !!}</td>
                {{-- <td>{!! $historiasUsuarios->id_proyecto !!}</td> --}}
                <td>{!! $historiasUsuarios->proyecto_nombre !!}</td>
            <td>{!! $historiasUsuarios->tipo_historia !!}</td>
            <td>{!! $historiasUsuarios->titulo_historia !!}</td>
            {{-- <td>{!! $historiasUsuarios->roll_id !!}</td> --}}
            <td>{!! $historiasUsuarios->rolle_nombre !!}</td>
            <td>{!! $historiasUsuarios->descripcion !!}</td>
            {{-- <td>{!! $historiasUsuarios->reque_interfaz !!}</td> --}}
            <td><a href="{{ asset($historiasUsuarios->reque_interfaz) }}" alt="" target="_blank">ver</a></td>
            {{-- <td>{!! $historiasUsuarios->dependencia !!}</td> --}}
            <td>{!! $historiasUsuarios->historia_nombre !!}</td>
                <td>
                    {!! Form::open(['route' => ['historiasUsuarios.destroy', $historiasUsuarios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('historiasUsuarios.show', [$historiasUsuarios->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('historiasUsuarios.edit', [$historiasUsuarios->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
