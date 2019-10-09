<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('nombre', 'Nombre:') !!}</b>
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Proyecto Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('id_proyecto', 'Proyecto:') !!}</b>
    {!! Form::select('id_proyecto', $proyectos, null, ['class' => 'form-control', 'placeholder'=>'Seleccione Una Opción']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rolles.index') !!}" class="btn btn-default">Cancelar</a>
</div>
