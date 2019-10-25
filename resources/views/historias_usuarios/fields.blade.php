<!-- Id Proyecto Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('id_proyecto', 'Proyecto:') !!}</b>
    {!! Form::select('id_proyecto', $proyectos, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Titulo Historia Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('titulo_historia', 'Titulo Historia:') !!}</b>
    {!! Form::text('titulo_historia', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Historia Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('tipo_historia', 'Tipo Historia:') !!}</b>
    {!! Form::text('tipo_historia', null, ['class' => 'form-control']) !!}
</div>

<!-- Roll Id Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('roll_id', 'Roll:') !!}</b>
    {!! Form::select('roll_id', $rolles, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <b>{!! Form::label('descripcion', 'Descripcion:') !!}</b>
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>


<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reque_interfaz', 'Requerimientos Interfaz:') !!}
    {!! Form::file('reque_interfaz') !!}
</div>
<div class="clearfix"></div>

<!-- Reque Interfaz Field -->
{{-- <div class="form-group col-sm-12 col-lg-12">
    <b>{!! Form::label('reque_interfaz', 'Reque Interfaz:') !!}</b>
    {!! Form::textarea('reque_interfaz', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Dependencia Field -->
<div class="form-group col-sm-12 col-lg-12">
    <b>{!! Form::label('dependencia', 'Dependencia:') !!}</b>
    {!! Form::select('dependencia', $historias , null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('historiasUsuarios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
