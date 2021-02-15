<div class="table-responsive">
    <table class="table" id="ilustrables-table">
        <thead>
            <tr>
                <th>Ilustrable Id</th>
        <th>Ilustrable Type</th>
        <th>Url</th>
        <th>Urls</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ilustrables as $ilustrable)
            <tr>
                <td>{{ $ilustrable->ilustrable_id }}</td>
            <td>{{ $ilustrable->ilustrable_type }}</td>
            <td>{{ $ilustrable->url }}</td>
            <td>{{ $ilustrable->urls }}</td>
                <td>
                    {!! Form::open(['route' => ['ilustrables.destroy', $ilustrable->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ilustrables.show', [$ilustrable->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ilustrables.edit', [$ilustrable->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
