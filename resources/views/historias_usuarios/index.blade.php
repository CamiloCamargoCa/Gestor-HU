@extends('layouts.app')

@section('content')
    <section class="content-header">
        {{-- <h1 class="pull-left">Historias Usuarios</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('historiasUsuarios.create') !!}">Nuevo</a>
        </h1> --}}
        <div class="row">
            <div class="col-sm-6">
                <h1 class="pull-left">Historias Usuarios</h1>
            </div>
        </div>
        {!! Form::open(['route' => 'historiasUsuarios.index', 'method' => 'get']) !!}
            <div class="row form-inline">

                <!-- Name Field -->
                <div class="form-group col-xs-12 col-sm-4">
                    {!! Form::label('tipo_historia', 'Tipo', ['class' => 'col-sm-4']) !!}
                    {!! Form::text('tipo_historia', null, ['class' => 'form-control col-sm-8']) !!}
                </div>

                <!-- Document Field -->
                <div class="form-group col-xs-12 col-sm-4">
                    {!! Form::label('titulo', 'Titulo') !!}
                    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                </div>

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

                 <!-- Id -->
                <div class="form-group col-xs-12 col-sm-4">
                    {!! Form::label('id', 'Historia') !!}
                    {!! Form::select('id', $historias1, null, ['class' => 'form-control','placeholder' =>'Seleccione una Opción']) !!}
                </div>

                <div class="form-group col-sm-5">
                    <div class="col-sm-4">
                        {!! Form::submit( 'Buscar', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-warning btn-block" href="{!! route('historiasUsuarios.index') !!}">Limpiar</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary btn-block" href="{!! route('historiasUsuarios.create') !!}">Crear</a>
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
                    @include('historias_usuarios.table')
            </div>
        </div>
        <div class="text-center">
             {{ $historiasUsuarios->links() }}
        </div>
    </div>
@endsection

@section('scripts')
    
    <script>
        
        // alert('hola');

    </script>
@endsection

@section('styles')
    <style>
        

    </style>
@endsection