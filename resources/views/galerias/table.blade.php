<div class="table-responsive">
    <table class="table" id="galerias-table">
        <thead>
            <tr>
                <th>Ilustrable Id</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($galerias as $galeria)
            <tr>
                <td>{{ $galeria->ilustrable_id }}</td>
            <td>{{ $galeria->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['galerias.destroy', $galeria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('galerias.show', [$galeria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('galerias.edit', [$galeria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
