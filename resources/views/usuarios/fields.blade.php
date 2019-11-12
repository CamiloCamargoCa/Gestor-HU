<!-- User Id Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('user_id', 'Usuario:') !!}</b>
    {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Operatividad Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('operatividad', 'Operatividad:') !!}</b>
    {!! Form::select('operatividad', $operabilidad, null, ['class' => 'form-control', 'placeholder'=>'Seleccione una Opción']) !!}
    {{-- <label class="checkbox-inline"></b>
        {!! Form::hidden('operatividad', 0) !!}
        {!! Form::checkbox('operatividad', '1', null) !!} 1
    <b></label> --}}
</div>

<!-- Horas Semanales Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('horas_semanales', 'Horas Semanales:') !!}</b>
    {!! Form::number('horas_semanales', null, ['class' => 'form-control', 'placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Horas Planeadas Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('horas_planeadas', 'Horas Planeadas:') !!}</b>
    {!! Form::number('horas_planeadas', null, ['class' => 'form-control', 'placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Horas Reales Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('horas_reales', 'Horas Reales:') !!}</b>
    {!! Form::number('horas_reales', null, ['class' => 'form-control', 'placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
