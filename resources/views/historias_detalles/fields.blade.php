<!-- Id Historia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_historia', 'Id Historia:') !!}
    {!! Form::number('id_historia', null, ['class' => 'form-control']) !!}
</div>

<!-- Tamaño Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tamaño', 'Tamaño:') !!}
    {!! Form::text('tamaño', null, ['class' => 'form-control']) !!}
</div>

<!-- Esfuerzo Horas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esfuerzo_horas', 'Esfuerzo Horas:') !!}
    {!! Form::number('esfuerzo_horas', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Sprint Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_sprint', 'Num Sprint:') !!}
    {!! Form::number('num_sprint', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Release Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_release', 'Num Release:') !!}
    {!! Form::number('num_release', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::number('id_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Desarrollador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_desarrollador', 'Id Desarrollador:') !!}
    {!! Form::number('id_desarrollador', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tester Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tester', 'Id Tester:') !!}
    {!! Form::number('id_tester', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('historiasDetalles.index') !!}" class="btn btn-default">Cancel</a>
</div>
