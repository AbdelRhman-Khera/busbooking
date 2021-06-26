<div class="table-responsive">
    <table class="table" id="stations-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stations as $station)
            <tr>
                <td>{{ $station->id }}</td>
                <td>{{ $station->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['stations.destroy', $station->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stations.show', [$station->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('stations.edit', [$station->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
