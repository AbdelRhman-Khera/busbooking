<div class="table-responsive">
    <table class="table" id="tickets-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Schedule Id</th>
                <th>Seat Id</th>
                <th>Bus Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->schedule_id }}</td>
                    <td>{{ $ticket->seat_id }}</td>
                    <td>{{ $ticket->bus_id }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['tickets.destroy', $ticket->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tickets.show', [$ticket->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            {{-- <a href="{{ route('tickets.edit', [$ticket->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a> --}}
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
