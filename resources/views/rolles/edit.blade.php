@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Rolles
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($rolles, ['route' => ['rolles.update', $rolles->id], 'method' => 'patch']) !!}

                        @include('rolles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection