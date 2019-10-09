<div class="table-responsive">
    <table class="table" id="rolles-table">
        <thead>
            <tr>
                <th>Id Roll</th>
                <th>Roll</th>
        <th>Proyecto</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rolles as $rolles)
            <tr>
                <td>{!! $rolles->id !!}</td>
                <td>{!! $rolles->nombre !!}</td>
                <td>{!! $rolles->proyecto_nombre !!}</td>
                <td>
                    {!! Form::open(['route' => ['rolles.destroy', $rolles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('rolles.show', [$rolles->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('rolles.edit', [$rolles->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
