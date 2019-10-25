@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Historias Usuarios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($historiasUsuarios, ['route' => ['historiasUsuarios.update', $historiasUsuarios->id], 'method' => 'patch','enctype' => 'multipart/form-data']) !!}

                        @include('historias_usuarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection