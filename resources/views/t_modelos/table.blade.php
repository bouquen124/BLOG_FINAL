<div class="table-responsive">
    <table class="table" id="tModelos-table">
        <thead>
            <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Modelo</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tModelos as $tModelos)
            <tr>
                <td>{{ $tModelos->nombre_modelo }}</td>
            <td>{{ $tModelos->descripcion_modelo }}</td>
            <td> <img class="rounded mx-auto d-block" style=" max-width: 40%;" src="{!! 'https://miedyno.com/storages/pagina/'.$tModelos->modelo !!}"></td>
                <td>
                    {!! Form::open(['route' => ['tModelos.destroy', $tModelos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tModelos.show', [$tModelos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tModelos.edit', [$tModelos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
