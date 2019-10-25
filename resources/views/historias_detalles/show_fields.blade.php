<!-- Id Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('id', 'Id:') !!}</b>
    <p>{!! $historiasDetalle->id !!}</p>
</div>

<!-- Id Historia Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('id_historia', 'Historia:') !!}</b>
    <p>{!! $historiasDetalle->historia_nombre !!}</p>
    {{-- <p>{!! $historiasDetalle->id_historia !!}</p> --}}
</div>

<!-- Tamaño Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('tamaño', 'Tamaño:') !!}</b>
    <p>{!! $historiasDetalle->tamaño !!}</p>
</div>

<!-- Esfuerzo Horas Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('esfuerzo_horas', 'Esfuerzo Horas:') !!}</b>
    <p>{!! $historiasDetalle->esfuerzo_horas !!}</p>
</div>

<!-- Num Sprint Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('num_sprint', 'Num Sprint:') !!}</b>
    <p>{!! $historiasDetalle->num_sprint !!}</p>
</div>

<!-- Num Release Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('num_release', 'Num Release:') !!}</b>
    <p>{!! $historiasDetalle->num_release !!}</p>
</div>

<!-- Id Usuario Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('id_usuario', 'Id Usuario:') !!}</b>
    <p>{!! $historiasDetalle->usuario_nombre !!}</p>
    {{-- <p>{!! $historiasDetalle->id_usuario !!}</p> --}}
</div>

<!-- Id Desarrollador Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('id_desarrollador', 'Desarrollador:') !!}</b>
    <p>{!! $historiasDetalle->programer_nombre !!}</p>
    {{-- <p>{!! $historiasDetalle->id_desarrollador !!}</p> --}}
</div>

<!-- Id Tester Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('id_tester', 'Tester:') !!}</b>
    <p>{!! $historiasDetalle->tester_nombre !!}</p>
    {{-- <p>{!! $historiasDetalle->id_tester !!}</p> --}}
</div>

<!-- Estado Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('estado', 'Estado:') !!}</b>
    <p>{!! $historiasDetalle->status_nombre !!}</p>
    {{-- <p>{!! $historiasDetalle->estado !!}</p> --}}
</div>

<!-- Created At Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('created_at', 'Creado:') !!}</b>
    <p>{!! $historiasDetalle->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-xs-12 col-sm-6">
    <b>{!! Form::label('updated_at', 'Modificado:') !!}</b>
    <p>{!! $historiasDetalle->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
{{-- <div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $historiasDetalle->deleted_at !!}</p>
</div> --}}

