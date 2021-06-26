<div class="table-responsive">
    <table class="table" id="buses-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Number</th>
        <th>Name</th>
        <th>Seats Num</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($buses as $bus)
            <tr>
                <td>{{ $bus->id }}</td>
                <td>{{ $bus->number }}</td>
            <td>{{ $bus->name }}</td>
            <td>{{ $bus->seats_num }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['buses.destroy', $bus->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('buses.show', [$bus->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('buses.edit', [$bus->id]) }}" class='btn btn-default btn-xs'>
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
