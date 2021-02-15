@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Aliado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($aliado, ['route' => ['aliados.update', $aliado->id], 'method' => 'patch']) !!}

                        @include('aliados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection