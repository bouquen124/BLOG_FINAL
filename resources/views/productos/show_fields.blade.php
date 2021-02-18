<!-- Estado Id Field -->
{{-- <div class="form-group">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    <p>{{ $aliados->estado_id }}</p>
</div> --}}


<table class="table">
    <thead>
        <tr>
            <th>Estado Id</th>
            <th>Categoria Id</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>costo</th>
 
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{ $producto->estado_id }}</td>
        <td>{{ $producto->categoria_id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>{{ substr($producto->descripcion, 0,20) }}...</td>
        <td>{{$producto->costo }}</td>
        
        </tr>
    </tbody>
</table>

<div class="conteiner">    
    
    <a href="{{ route('productos.index') }}" class="btn btn-default">Regresar</a>
    <a href="{{ route('ilustrables.create', ['id'=>$producto->id, 'type'=>'Producto', 'back'=>Request::path() ]) }}"><button class="btn btn-primary btn-md">Agregar Imagen</button></a>

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