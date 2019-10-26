@extends('layouts.app')

@section('content')
    <section class="content-header">
        {{-- <h1 class="pull-left">Rolles</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('rolles.create') !!}">Nuevo</a>
        </h1> --}}
        <div class="row">
            <div class="col-sm-6">
                <h1 class="pull-left">Rolles</h1>
            </div>
        </div>
        {!! Form::open(['route' => 'rolles.index', 'method' => 'get']) !!}
            <div class="row form-inline">

                <!-- proyectos -->
                <div class="form-group col-xs-12 col-sm-3">
                    {!! Form::label('proyectos', 'Proyectos') !!}
                    {!! Form::select('proyectos', $proyectos, null, ['class' => 'form-control','placeholder'=>'Seleccione una Opción']) !!}
                </div>

                <!-- Name Field -->
                <div class="form-group col-xs-12 col-sm-3">
                    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-4']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control col-sm-8']) !!}
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                    <div class="col-sm-4">
                        {!! Form::submit( 'Buscar', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-warning btn-block" href="{!! route('rolles.index') !!}">Limpiar</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary btn-block" href="{!! route('rolles.create') !!}">Crear</a>
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
                    @include('rolles.table')
            </div>
        </div>
        <div class="text-center">
            {{ $rolles->links() }}
        </div>
    </div>
@endsection

