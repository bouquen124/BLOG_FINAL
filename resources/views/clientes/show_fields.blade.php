<!-- Estado Id Field -->
{{-- <div class="form-group">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    <p>{{ $aliados->estado_id }}</p>
</div> --}}


<table class="table">
    <thead>
        <tr>
            <th>Estado Id</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Direcion</th>
    <th>Correo</th>
    <th>Telefono</th>
 
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{ $cliente->estado_id }}</td>
        <td>{{ $cliente->nombre }}</td>
        <td>{{ substr($cliente->descripcion, 0,20) }}...</td>
        <td>{{ $cliente->direcion }}</td>
        <td>{{ $cliente->correo }}</td>
        <td>{{ $cliente->telefono }}</td>
 
        </tr>
    </tbody>
</table>

<div class="conteiner">    
    
    <a href="{{ route('clientes.index') }}" class="btn btn-default">Regresar</a>
    <a href="{{ route('ilustrables.create', ['id'=>$cliente->id, 'type'=>'Cliente', 'back'=>Request::path() ]) }}"><button class="btn btn-primary btn-md">Agregar Imagen</button></a>

</div>

<table class="table" style="margin-top:100px">

    <thead>
        <tr>
            <th>Imagen id</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($imagenes as $imagen)
            <tr>
                <td>{{ $imagen->id }}</td>
                <td>
                    <img src="{{ $imagen->url }}" alt="" width="80px">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
