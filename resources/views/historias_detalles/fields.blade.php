<!-- Id Historia Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('id_historia', 'Historia:') !!}</b>
    {!! Form::select('id_historia', $historias, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Tamaño Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('tamaño', 'Tamaño:') !!}</b>
    {!! Form::select('tamaño', $tamano, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Esfuerzo Horas Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('esfuerzo_horas', 'Esfuerzo Horas:') !!}</b>
    {!! Form::number('esfuerzo_horas', null, ['class' => 'form-control', 'readonly'=>'true']) !!}
</div>

<!-- Num Sprint Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('num_sprint', 'Numero Sprint:') !!}</b>
    {!! Form::number('num_sprint', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Release Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('num_release', 'Numero Release:') !!}</b>
    {!! Form::number('num_release', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Field -->
{{-- <div class="form-group col-sm-6"> --}}
    {{-- <b>{!! Form::label('id_usuario', 'Usuario:') !!}</b> --}}
    {!! Form::hidden('id_usuario', $value_id, null, ['class' => 'form-control']) !!}
{{-- </div> --}}

<!-- Id Desarrollador Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('id_desarrollador', 'Desarrollador:') !!}</b>
    {!! Form::select('id_desarrollador', $programer, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Id Tester Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('id_tester', 'Tester:') !!}</b>
    {!! Form::select('id_tester', $tester, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('estado', 'Estado:') !!}</b>
    {!! Form::select('estado',$status_hu, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('historiasDetalles.index') !!}" class="btn btn-default">Cancelar</a>
</div>
