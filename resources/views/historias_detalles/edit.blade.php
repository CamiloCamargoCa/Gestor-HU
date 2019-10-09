@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Historias Detalle
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($historiasDetalle, ['route' => ['historiasDetalles.update', $historiasDetalle->id], 'method' => 'patch']) !!}

                        @include('historias_detalles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection