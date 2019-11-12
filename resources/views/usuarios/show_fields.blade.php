<div class="row">
    <div class="col-xs-12 col-sm-4">
        <!-- Id Field -->
        <div class="form-group">
            <b>{!! Form::label('id', 'Id:') !!}</b>
            <p>{!! $usuarios->id !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <!-- User Id Field -->
        <div class="form-group">
            <b>{!! Form::label('user_id', 'User Id:') !!}</b>
            <p>{!! $usuarios->user_nombre !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <!-- Operatividad Field -->
        <div class="form-group">
            <b>{!! Form::label('operatividad', 'Operatividad:') !!}</b>
            <p>{!! $usuarios->ope_nombre !!}</p>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-4">
        <!-- Horas Semanales Field -->
        <div class="form-group">
            <b>{!! Form::label('horas_semanales', 'Horas Semanales:') !!}</b>
            <p>{!! $usuarios->horas_semanales !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <!-- Horas Planeadas Field -->
        <div class="form-group">
            <b>{!! Form::label('horas_planeadas', 'Horas Planeadas:') !!}</b>
            <p>{!! $usuarios->horas_planeadas !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <!-- Horas Reales Field -->
        <div class="form-group">
            <b>{!! Form::label('horas_reales', 'Horas Reales:') !!}</b>
            <p>{!! $usuarios->horas_reales !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-4">
        <!-- Updated At Field -->
        <div class="form-group">
            <b>{!! Form::label('updated_at', 'Updated At:') !!}</b>
            <p>{!! $usuarios->updated_at !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <!-- Created At Field -->
        <div class="form-group">
            <b>{!! Form::label('created_at', 'Created At:') !!}</b>
            <p>{!! $usuarios->created_at !!}</p>
        </div>
    </div>
</div>

<!-- Deleted At Field -->
{{-- <div class="form-group">
    <b>{!! Form::label('deleted_at', 'Deleted At:') !!}</b>
    <p>{!! $usuarios->deleted_at !!}</p>
</div> --}}

