<!-- Cedulanombre Field -->
<div class="form-group col-xs-12 col-sm-6">
    {!! Form::label('cedula', 'Cedula:') !!}
    {!! Form::number('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-xs-12 col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Salario Field -->
<div class="form-group col-xs-12 col-sm-6">
    {!! Form::label('salario', 'Salario:') !!}
    {!! Form::text('salario', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-xs-12 col-sm-6">
    {!! Form::label('Estado', 'Estado:') !!}
    {!! Form::select('Estado', $estadosemp, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Id Roll Field -->
<div class="form-group col-xs-12 col-sm-6">
    {!! Form::label('id_roll', 'Roll:') !!}
    {!! Form::select('id_roll', $rolles, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Id Proyecto Field -->
<div class="form-group col-xs-12 col-sm-6">
    {!! Form::label('id_proyecto', 'Proyecto:') !!}
    {!! Form::select('id_proyecto', $proyectos, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('empleados.index') !!}" class="btn btn-default">Cancelar</a>
</div>
