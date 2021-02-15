<div class="table-responsive">
    <table class="table" id="aliados-table">
        <thead>
            <tr>
                <th>Estado Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Direcion</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Facebook</th>
        <th>Twitter</th>
        <th>Instagram</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aliados as $aliado)
            <tr>
            <td>{{ $aliado->estado_id }}</td>
            <td>{{ $aliado->nombre }}</td>
            <td>{{ substr($aliado->descripcion,0,35) }}</td>
            <td>{{ $aliado->direcion }}</td>
            <td>{{ $aliado->correo }}</td>
            <td>{{ $aliado->telefono }}</td>
            <td>{{ $aliado->facebook }}</td>
            <td>{{ $aliado->twitter }}</td>
            <td>{{ $aliado->instagram }}</td>
                <td>
                    {!! Form::open(['route' => ['aliados.destroy', $aliado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('aliados.show', [$aliado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('aliados.edit', [$aliado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
