
<div class="row">
    <div class="col-xs-12 col-sm-4">
        <!-- Id Field -->
        <div class="form-group">
            <b>{!! Form::label('id', 'Id:') !!}</b>
            <p>{!! $rolles->id !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <!-- Nombre Field -->
        <div class="form-group">
            <b>{!! Form::label('nombre', 'Nombre:') !!}</b>
            <p>{!! $rolles->nombre !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <!-- Id Proyecto Field -->
        <div class="form-group">
            <b>{!! Form::label('id_proyecto', 'Proyecto:') !!}</b>
            <p>{!! $rolles->proyecto_nombre !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <!-- Created At Field -->
        <div class="form-group">
            <b>{!! Form::label('created_at', 'Creado:') !!}</b>
            <p>{!! $rolles->created_at !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <!-- Updated At Field -->
        <div class="form-group">
            <b>{!! Form::label('updated_at', 'Modificado:') !!}</b>
            <p>{!! $rolles->updated_at !!}</p>
        </div>
    </div>
</div>



<!-- Deleted At Field -->
{{-- <div class="form-group">
    <b>{!! Form::label('deleted_at', 'Deleted At:') !!}</b>
    <p>{!! $rolles->deleted_at !!}</p>
</div> --}}

