<div class="table-responsive">
    <table class="table" id="proyectos-table">
        <thead>
            <tr>
                <th>Id Proyecto</th>
                <th>Nombre</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proyectos as $proyectos)
            <tr>
                <td>{!! $proyectos->id !!}</td>
                <td>{!! $proyectos->nombre !!}</td>
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
