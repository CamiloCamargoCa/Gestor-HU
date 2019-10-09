<div class="row">
    <div class="col-xs-12 col-sm-6">
        <!-- Id Field -->
        <div class="form-group">
            <b>{!! Form::label('id', 'Id:') !!}</b>
            <p>{!! $usuarios->id !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <!-- User Id Field -->
        <div class="form-group">
            <b>{!! Form::label('user_id', 'User Id:') !!}</b>
            <p>{!! $usuarios->user_nombre !!}</p>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-6">
        <!-- Operatividad Field -->
        <div class="form-group">
            <b>{!! Form::label('operatividad', 'Operatividad:') !!}</b>
            <p>{!! $usuarios->ope_nombre !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <!-- Roll Id Field -->
        <div class="form-group">
            <b>{!! Form::label('roll_id', 'Roll Id:') !!}</b>
            {{-- <p>{!! $usuarios->roll_id !!}</p> --}}
            <p>{!! $usuarios->roll_nombre !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <!-- Created At Field -->
        <div class="form-group">
            <b>{!! Form::label('created_at', 'Created At:') !!}</b>
            <p>{!! $usuarios->created_at !!}</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <!-- Updated At Field -->
        <div class="form-group">
            <b>{!! Form::label('updated_at', 'Updated At:') !!}</b>
            <p>{!! $usuarios->updated_at !!}</p>
        </div>
    </div>
</div>

<!-- Deleted At Field -->
{{-- <div class="form-group">
    <b>{!! Form::label('deleted_at', 'Deleted At:') !!}</b>
    <p>{!! $usuarios->deleted_at !!}</p>
</div> --}}

