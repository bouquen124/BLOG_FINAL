<!-- Nombre Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_modelo', 'Nombre del modelo:') !!}
    {!! Form::text('nombre_modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_modelo', 'Descripción del modelo:') !!}
    {!! Form::textarea('descripcion_modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::file('modelo') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tModelos.index') }}" class="btn btn-default">Cancelar</a>
</div>
