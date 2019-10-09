<!-- Id Proyecto Field -->

<div class="row">
    <div class="col-xs-12  col-sm-6">
        <div class="form-group">
            {{-- Id de proyecto Field --}}
            <b>{!! Form::label('id_proyecto', 'Id Proyecto:') !!}</b>
            <p>{!! $proyectos->id !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Nombre Field -->
        <div class="form-group">
            <b>{!! Form::label('nombre', 'Nombre:') !!}</b>
            <p>{!! $proyectos->nombre !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-6">
        <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Creado:') !!}
            <p>{!! $proyectos->created_at !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-6">
        <!-- Updated At Field -->
        <div class="form-group">
            {!! Form::label('updated_at', 'Modificado:') !!}
            <p>{!! $proyectos->updated_at !!}</p>
        </div>
    </div>
</div>

<!-- Deleted At Field -->
{{-- <div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $proyectos->deleted_at !!}</p>
</div> --}}

