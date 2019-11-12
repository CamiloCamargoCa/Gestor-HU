

<!-- Codigo Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_proyecto', 'Codigo Proyecto:') !!}
    {!! Form::text('cod_proyecto', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Gerente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_gerente', 'Id Gerente:') !!}
    {!! Form::text('id_gerente', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Gerente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_gerente', 'Nombre Gerente:') !!}
    {!! Form::text('nombre_gerente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Planeada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fec_ini_planeada', 'Fecha Inicio Planeada:') !!}
    {!! Form::date('fec_ini_planeada', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Real Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fec_ini_real', 'Fecha Inicio Real:') !!}
    {!! Form::date('fec_ini_real', null, ['class' => 'form-control']) !!}
</div>

<!--  Fecha Fin Planeada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fec_fin_planeada', 'Fecha Fin Planeada:') !!}
    {!! Form::date('fec_fin_planeada', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Fin Real Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fec_fin_real', 'Fecha Fin Real:') !!}
    {!! Form::date('fec_fin_real', null, ['class' => 'form-control']) !!}
</div>

<!-- Esfuerzo Planeado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esfu_planeado', 'Esfuerzo Planeado:') !!}
    {!! Form::number('esfu_planeado', null, ['class' => 'form-control']) !!}
</div>

<!-- Esfuerzo Real Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esfu_real', 'Esfuerzo Real:') !!}
    {!! Form::number('esfu_real', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('proyectos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
