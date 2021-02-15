<!-- Nombre Modelo Field -->
<div class="form-group">
    {!! Form::label('nombre_modelo', 'Nombre Modelo:') !!}
    <p>{{ $tModelos->nombre_modelo }}</p>
</div>

<!-- Descripcion Modelo Field -->
<div class="form-group">
    {!! Form::label('descripcion_modelo', 'Descripcion Modelo:') !!}
    <p>{{ $tModelos->descripcion_modelo }}</p>
</div>

<!-- Modelo Field -->
<div class="form-group">
    {!! Form::label('modelo', 'Modelo:') !!}
    <p>{{ $tModelos->modelo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tModelos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tModelos->updated_at }}</p>
</div>

