<!-- Id Proyecto Field -->

<div class="row">
    <div class="col-xs-12  col-sm-4">
        <div class="form-group">
            {{-- Id de proyecto Field --}}
            <b>{!! Form::label('id_proyecto', 'Id Proyecto:') !!}</b>
            <p>{!! $proyectos->id !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-4">
        <!-- Codigo Proyecto Field -->
        <div class="form-group">
            <b>{!! Form::label('cod_proyecto', 'Codigo Proyecto:') !!}</b>
            <p>{!! $proyectos->cod_proyecto !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-4">
        <!-- Nombre Field -->
        <div class="form-group">
            <b>{!! Form::label('nombre', 'Nombre:') !!}</b>
            <p>{!! $proyectos->nombre !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-4">
        <div class="form-group">
            {{-- Id Gerente Field --}}
            <b>{!! Form::label('id_gerente', 'Id Gerente:') !!}</b>
            <p>{!! $proyectos->id_gerente !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-4">
        <div class="form-group">
            {{-- Nombre Gerente Field --}}
            <b>{!! Form::label('nombre_gerente', 'Nombre Gerente:') !!}</b>
            <p>{!! $proyectos->nombre_gerente !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-4">
        <!-- Fecha Inicio Planeada Field -->
        <div class="form-group">
            <b>{!! Form::label('fec_ini_planeada', 'Fecha Inicio Planeada:') !!}</b>
            <p>{!! $proyectos->fec_ini_planeada !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-4">
        <div class="form-group">
            {{-- Fecha Inicio Real Field --}}
            <b>{!! Form::label('fec_ini_real', 'Fecha Inicio Real:') !!}</b>
            <p>{!! $proyectos->fec_ini_real !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-4">
        <!-- Fecha Fin Planeada Field -->
        <div class="form-group">
            <b>{!! Form::label('fec_fin_planeada', 'Fecha Fin Planeada:') !!}</b>
            <p>{!! $proyectos->fec_fin_planeada !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-4">
        <div class="form-group">
            {{-- Fecha Fin Real Field --}}
            <b>{!! Form::label('fec_fin_real', 'Fecha Fin Real:') !!}</b>
            <p>{!! $proyectos->fec_fin_real !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-4">
        <!-- Esfuerzo Planeado Field -->
        <div class="form-group">
            <b>{!! Form::label('esfu_planeado', 'Esfuerzo Planeado:') !!}</b>
            <p>{!! $proyectos->esfu_planeado !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-4">
        <div class="form-group">
            {{-- Esfuerzo Real Field --}}
            <b>{!! Form::label('esfu_real', 'Esfuerzo Real:') !!}</b>
            <p>{!! $proyectos->esfu_real !!}</p>
        </div>
    </div>
    <div class="col-xs-12  col-sm-4">
        <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Creado:') !!}
            <p>{!! $proyectos->created_at !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12  col-sm-4">
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

