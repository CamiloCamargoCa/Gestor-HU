<div class="table-responsive">
    <table class="table" id="usuarios-table">
        <thead>
            <tr>
                <th>Id Registro</th>
                <th>Usuario</th>
                <th>Operatividad</th>
                {{-- <th>Roll Id</th> --}}
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuarios)
            <tr>
                <td>{!! $usuarios->id !!}</td>
                {{-- <td>{!! $usuarios->user_id !!}</td> --}}
                <td>{!! $usuarios->user_nombre !!}</td>
            <td>{!! $usuarios->ope_nombre !!}</td>
            {{-- <td>{!! $usuarios->operatividad !!}</td> --}}
            {{-- <td>{!! $usuarios->rolle_nombre !!}</td> --}}
            {{-- <td>{!! $usuarios->roll_id !!}</td> --}}
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuarios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('usuarios.show', [$usuarios->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('usuarios.edit', [$usuarios->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
