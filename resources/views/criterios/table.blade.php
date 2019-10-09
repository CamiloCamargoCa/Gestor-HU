<div class="table-responsive">
    <table class="table" id="criterios-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Proyecto</th>
                <th>Historia</th>
                <th>Descripcion</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($criterios as $criterios)
            <tr>
                <td>{!! $criterios->id !!}</td>
                {{-- <td>{!! $criterios->id_proyecto !!}</td> --}}
                <td>{!! $criterios->proyecto_nombre !!}</td>
                {{-- <td>{!! $criterios->id_historia !!}</td> --}}
                <td>{!! $criterios->historia_nombre !!}</td>
                <td>{!! $criterios->descripcion !!}</td>
                <td>
                    {!! Form::open(['route' => ['criterios.destroy', $criterios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('criterios.show', [$criterios->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('criterios.edit', [$criterios->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
