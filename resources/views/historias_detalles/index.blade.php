@extends('layouts.app')

@section('content')
    <section class="content-header">
        {{-- <h1 class="pull-left">Planeación</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('historiasDetalles.create') !!}">Nuevo</a>
        </h1> --}}
        <div class="row">
            <div class="col-sm-6">
                <h1 class="pull-left">Planeación</h1>
            </div>
        </div>
        {!! Form::open(['route' => 'historiasDetalles.index', 'method' => 'get']) !!}
            <div class="row form-inline">

                <!-- Historia Field -->
                <div class="form-group col-sm-4">
                    {!! Form::label('id', 'Historia') !!}
                    {!! Form::select('id', $historias1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <!-- Tamaño Field -->
                <div class="form-group col-sm-4">
                    {!! Form::label('tamano', 'Tamaño') !!}
                    {!! Form::select('tamano', $tamano1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <!-- Estado Field -->
                <div class="form-group col-sm-4">
                    {!! Form::label('estado', 'Estado') !!}
                    {!! Form::select('estado', $status_hu1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <!-- programer Field -->
                <div class="form-group col-sm-5">
                    {!! Form::label('programer', 'Desarrollador') !!}
                    {!! Form::select('programer', $programer1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <!-- tester Field -->
                <div class="form-group col-sm-3">
                    {!! Form::label('tester', 'Tester') !!}
                    {!! Form::select('tester', $tester1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <div class="form-group col-sm-4">
                    <div class="col-sm-4">
                        {!! Form::submit( 'Buscar', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-warning btn-block" href="{!! route('historiasDetalles.index') !!}">Limpiar</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary btn-block" href="{!! route('historiasDetalles.create') !!}">Crear</a>
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
                    @include('historias_detalles.table')
            </div>
        </div>
        <div class="text-center">
            {{ $historiasDetalles->links() }}
        </div>
    </div>
@endsection

