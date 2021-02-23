<!-- Ilustrable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ilustrable_id', 'Ilustrable Id:') !!}
    {!! Form::select('ilustrable_id',$ilustrable, null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('galerias.index') }}" class="btn btn-default">Cancel</a>
</div>
