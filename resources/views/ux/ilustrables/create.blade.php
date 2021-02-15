@extends('ux.root')

@section('content_ilu')
 
<section class="content-header">
    <h1>
        Ilustrable
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::open(['route' => 'ilustrables.store', 'files'=>true]) !!}

                    @include('ux.ilustrables.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div> 
@endsection