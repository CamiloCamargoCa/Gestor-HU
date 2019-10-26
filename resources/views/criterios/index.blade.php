@extends('layouts.app')

@section('content')
    <section class="content-header">
        {{-- <h1 class="pull-left">Criterios</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('criterios.create') !!}">Nuevo</a>
        </h1> --}}
        <div class="row">
            <div class="col-sm-6">
                <h1 class="pull-left">Criterios</h1>
            </div>
        </div>
        {!! Form::open(['route' => 'criterios.index', 'method' => 'get']) !!}
            <div class="row form-inline">

                <!-- Doc Type Field -->
                <div class="form-group col-xs-12 col-sm-3">
                    {!! Form::label('proyectos1', 'Proyectos') !!}
                    {!! Form::select('proyectos1', $proyectos1, null, ['class' => 'form-control','placeholder' => 'Seleccione una Opción']) !!}
                </div>

                <!-- Provider Type Field -->
                <div class="form-group col-xs-12 col-sm-3">
                    {!! Form::label('historia1', 'Historia') !!}
                    {!! Form::select('historia1', $historias1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                    <div class="col-sm-4">
                        {!! Form::submit( 'Buscar', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-warning btn-block" href="{!! route('criterios.index') !!}">Limpiar</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary btn-block" href="{!! route('criterios.create') !!}">Crear</a>
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
                    @include('criterios.table')
            </div>
        </div>
        <div class="text-center">
            {{ $criterios->links() }}
        </div>
    </div>
@endsection

