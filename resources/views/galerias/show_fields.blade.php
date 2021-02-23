<!-- Ilustrable Id Field -->
<div class="form-group">
    {!! Form::label('ilustrable_id', 'Ilustrable Id:') !!}
    <p>{{ $galeria->ilustrable_id }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $galeria->descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $galeria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $galeria->updated_at }}</p>
</div>

