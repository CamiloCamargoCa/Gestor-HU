@extends('layouts.app')

@section('content')
    <section class="content-header">

        <div class="row">
            <div class="col-sm-6">
                <h1 class="pull-left">Equipo de Proyecto</h1>
            </div>
        </div>
        {!! Form::open(['route' => 'usuarios.index', 'method' => 'get']) !!}
            <div class="row form-inline">

                <!-- Usuario -->
                <div class="form-group col-xs-12 col-sm-3">
                    {!! Form::label('users1', 'Usuario') !!}
                    {!! Form::select('users1', $users1, null, ['class' => 'form-control','placeholder' => 'Seleccione una Opción']) !!}
                </div>

                <!-- operabilidad -->
                <div class="form-group col-xs-12 col-sm-3">
                    {!! Form::label('operatividad1', 'Operatibilidad') !!}
                    {!! Form::select('operatividad1', $operabilidad1, null, ['class' => 'form-control','placeholder' => 'Seleccione una Opción']) !!}
                </div>

                <br>

                <div class="form-group col-xs-12 col-sm-6">
                    <div class="col-xs-12 col-sm-4">
                        {!! Form::submit( 'Buscar', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <a class="btn btn-warning btn-block" href="{!! route('usuarios.index') !!}">Limpiar</a>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <a class="btn btn-primary btn-block" href="{!! route('usuarios.create') !!}">Crear</a>
                    </div>
                </div>
                
            </div>
        {!! Form::close() !!}
        {{-- <h1 class="pull-left">Usuarios</h1> --}}
        {{-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('usuarios.create') !!}">Nuevo</a>
        </h1> --}}
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('usuarios.table')
            </div>
        </div>
        <div class="text-center">
            {{ $usuarios->links() }}
        </div>
    </div>
@endsection

