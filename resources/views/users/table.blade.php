<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Id Usuarios</th>
                <th>Nombre</th>
                <th>Correo</th>
                {{-- <th>Email Verified At</th> --}}
                {{-- <th>Contraseña</th> --}}
                {{-- <th>Remember Token</th> --}}
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
                <td>{!! $users->id !!}</td>
                <td>{!! $users->name !!}</td>
            <td>{!! $users->email !!}</td>
            {{-- <td>{!! $users->email_verified_at !!}</td> --}}
            {{-- <td>{!! $users->password !!}</td> --}}
            {{-- <td>{!! $users->remember_token !!}</td> --}}
                <td>
                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('users.show', [$users->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('users.edit', [$users->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
