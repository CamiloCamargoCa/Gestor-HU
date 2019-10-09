
<div class="row">
    <div class="col-xs-12  col-sm-6">
        <!-- Id Field -->
        <div class="form-group">
            <b>{!! Form::label('id', 'Id:') !!}</b>
            <p>{!! $criterios->id !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Id Proyecto Field -->
        <div class="form-group">
            <b>{!! Form::label('id_proyecto', 'Id Proyecto:') !!}</b>
            {{-- <p>{!! $criterios->id_proyecto !!}</p> --}}
            <p>{!! $criterios->proyecto_nombre !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-6">
        <!-- Id Historia Field -->
        <div class="form-group">
            <b>{!! Form::label('id_historia', 'Id Historia:') !!}</b>
            {{-- <p>{!! $criterios->id_historia !!}</p> --}}
            <p>{!! $criterios->historia_nombre !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Descripcion Field -->
        <div class="form-group">
            <b>{!! Form::label('descripcion', 'Descripcion:') !!}</b>
            <p>{!! $criterios->descripcion !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-6">
        <!-- Created At Field -->
        <div class="form-group">
            <b>{!! Form::label('created_at', 'Creado:') !!}</b>
            <p>{!! $criterios->created_at !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Updated At Field -->
        <div class="form-group">
            <b>{!! Form::label('updated_at', 'Modificado:') !!}</b>
            <p>{!! $criterios->updated_at !!}</p>
        </div>
    </div>
</div>

<!-- Deleted At Field -->
{{-- <div class="form-group">
    <b>{!! Form::label('deleted_at', 'Deleted At:') !!}</b>
    <p>{!! $criterios->deleted_at !!}</p>
</div> --}}

