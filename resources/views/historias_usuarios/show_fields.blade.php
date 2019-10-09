
<div class="row">
    <div class="col-xs-12  col-sm-6">
        <!-- Id Historia Field -->
        <div class="form-group">
            <b>{!! Form::label('id_historia', 'Id Historia:') !!}</b>
            <p>{!! $historiasUsuarios->id !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Id Proyecto Field -->
        <div class="form-group">
            <b>{!! Form::label('id_proyecto', 'Id Proyecto:') !!}</b>
            <p>{!! $historiasUsuarios->proyecto_nombre !!}</p>
            {{-- <p>{!! $historiasUsuarios->id_proyecto !!}</p> --}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-6">
        <!-- Tipo Historia Field -->
        <div class="form-group">
            <b>{!! Form::label('tipo_historia', 'Tipo Historia:') !!}</b>
            <p>{!! $historiasUsuarios->tipo_historia !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Titulo Historia Field -->
        <div class="form-group">
            <b>{!! Form::label('titulo_historia', 'Titulo Historia:') !!}</b>
            <p>{!! $historiasUsuarios->titulo_historia !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-6">
        <!-- Roll Id Field -->
        <div class="form-group">
            <b>{!! Form::label('roll_id', 'Roll Id:') !!}</b>
            <p>{!! $historiasUsuarios->roll_nombre !!}</p>
            {{-- <p>{!! $historiasUsuarios->roll_id !!}</p> --}}
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Reque Interfaz Field -->
        <div class="form-group">
            <b>{!! Form::label('reque_interfaz', 'Reque Interfaz:') !!}</b>
            <p>{!! $historiasUsuarios->reque_interfaz !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-6">
        <!-- Descripcion Field -->
        <div class="form-group">
            <b>{!! Form::label('descripcion', 'Descripcion:') !!}</b>
            <p>{!! $historiasUsuarios->descripcion !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Dependencia Field -->
        <div class="form-group">
            <b>{!! Form::label('dependencia', 'Dependencia:') !!}</b>
            <p>{!! $historiasUsuarios->historia_nombre !!}</p>
            {{-- <p>{!! $historiasUsuarios->dependencia !!}</p> --}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-6">
        <!-- Created At Field -->
        <div class="form-group">
            <b>{!! Form::label('created_at', 'Creado:') !!}</b>
            <p>{!! $historiasUsuarios->created_at !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Updated At Field -->
        <div class="form-group">
            <b>{!! Form::label('updated_at', 'Modificado:') !!}</b>
            <p>{!! $historiasUsuarios->updated_at !!}</p>
        </div>
    </div>
</div>

