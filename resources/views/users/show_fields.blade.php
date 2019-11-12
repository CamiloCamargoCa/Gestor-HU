
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <!-- Id Field -->
        <div class="form-group">
            <b>{!! Form::label('id', 'Id Usuario:') !!}</b>
            <p>{!! $users->id !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <!-- Name Field -->
        <div class="form-group">
            <b>{!! Form::label('name', 'Nombre:') !!}</b>
            <p>{!! $users->name !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <!-- Email Field -->
        <div class="form-group">
            <b>{!! Form::label('email', 'Correo:') !!}</b>
            <p>{!! $users->email !!}</p>
        </div>
    </div>
    {{-- <div class="col-xs-12 col-sm-6">
        <!-- Password Field -->
        <div class="form-group">
            <b>{!! Form::label('password', 'Contraseña:') !!}</b>
            <p>{!! $users->password !!}</p>
        </div>
    </div> --}}
</div>

<!-- Email Verified At Field -->
{{-- <div class="form-group">
    <b>{!! Form::label('email_verified_at', 'Email Verified At:') !!}</b>
    <p>{!! $users->email_verified_at !!}</p>
</div> --}}


<!-- Remember Token Field -->
{{-- <div class="form-group">
    <b>{!! Form::label('remember_token', 'Remember Token:') !!}</b>
    <p>{!! $users->remember_token !!}</p>
</div> --}}

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <!-- Created At Field -->
        <div class="form-group">
            <b>{!! Form::label('created_at', 'Creado:') !!}</b>
            <p>{!! $users->created_at !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <!-- Updated At Field -->
        <div class="form-group">
            <b>{!! Form::label('updated_at', 'Modificado:') !!}</b>
            <p>{!! $users->updated_at !!}</p>
        </div>
    </div>
</div>

