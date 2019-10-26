@extends('layouts.app')

@section('content')
    <section class="content-header">
        {{-- <h1 class="pull-left">Empleados</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('empleados.create') !!}">Nuevo</a>
        </h1> --}}
        <div class="row">
            <div class="col-sm-6">
                <h1 class="pull-left">Empleados</h1>
            </div>
        </div>
        {!! Form::open(['route' => 'empleados.index', 'method' => 'get']) !!}
            <div class="row form-inline">

                <!-- Name Field -->
                <div class="form-group col-xs-12 col-sm-4">
                    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-4']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control col-sm-8']) !!}
                </div>

                <!-- Cedula Field -->
                <div class="form-group col-xs-12 col-sm-4">
                    {!! Form::label('cedula', 'Cedula') !!}
                    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Estado -->
                <div class="form-group col-xs-12 col-sm-4">
                    {!! Form::label('estado', 'Estado') !!}
                    {!! Form::select('estado', $estadosemp1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <br>

                <!-- Proyecto -->
                <div class="form-group col-xs-12 col-sm-4">
                    {!! Form::label('proyectos', 'Proyectos') !!}
                    {!! Form::select('proyectos', $proyectos1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <!-- Rolles -->
                <div class="form-group col-xs-12 col-sm-3">
                    {!! Form::label('rolles', 'Rolles') !!}
                    {!! Form::select('rolles', $rolles1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <div class="form-group col-sm-5">
                    <div class="col-sm-4">
                        {!! Form::submit( 'Buscar', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-warning btn-block" href="{!! route('empleados.index') !!}">Limpiar</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary btn-block" href="{!! route('empleados.create') !!}">Crear</a>
                    </div>
                </div>
                
            </div>
        {!! Form::close() !!}
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('empleados.table')
            </div>
        </div>
        <div class="text-center">
            {{ $empleados->links() }}
        </div>
    </div>
@endsection

