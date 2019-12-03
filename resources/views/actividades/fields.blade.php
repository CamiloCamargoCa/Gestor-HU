<!-- Cód Proyecto Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('cód_proyecto', 'Código Proyecto:') !!}</b>
    {!! Form::select('cód_proyecto', $proyectos, null,['class' => 'form-control']) !!}
</div>

<!-- Id Pbi Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('id_pbi', 'Id HU:') !!}</b>
    {!! Form::select('id_pbi', $historias, null, ['class' => 'form-control']) !!}
</div>

<!-- Num Sprint Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('num_sprint', 'Numero Sprint:') !!}</b>
    {!! Form::number('num_sprint', null, ['class' => 'form-control']) !!}
</div>

<!-- Nom Actividad Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('nom_actividad', 'Nombre Actividad:') !!}</b>
    {!! Form::text('nom_actividad', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Ingeniero Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('id_ingeniero', 'Id Ingeniero:') !!}</b>
    {!! Form::select('id_ingeniero', $user, null, ['class' => 'form-control']) !!}
</div>

<!-- Fech Ini Real Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('fech_ini_real', 'Fecha Inicial Real:') !!}</b>
    {!! Form::date('fech_ini_real', null, ['class' => 'form-control','id'=>'fech_ini_real']) !!}
</div>

{{-- @section('scripts')
    <script type="text/javascript">
        $('#fech_ini_real').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection --}}

<!-- Hras Esfuerzo Field -->
<div class="form-group col-sm-6">
    <b>{!! Form::label('hras_esfuerzo', 'Horas Esfuerzo:') !!}</b>
    {!! Form::number('hras_esfuerzo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('actividades.index') !!}" class="btn btn-default">Cancelar</a>
</div>
