<div class="table-responsive">
    <table class="table" id="trips-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trips as $trip)
            <tr>
                <td>{{ $trip->id }}</td>
                <td>{{ $trip->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['trips.destroy', $trip->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trips.show', [$trip->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('trips.edit', [$trip->id]) }}" class='btn btn-default btn-xs'>
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
