<!-- Id Proyecto Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('id_proyecto', 'Proyecto:') !!}</b>
    {!! Form::select('id_proyecto',$proyectos, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Id Historia Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('id_historia', 'Historia:') !!}</b>
    {!! Form::select('id_historia',$historias, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <b>{!! Form::label('descripcion', 'Descripcion de Criterios:') !!}</b>
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('criterios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
