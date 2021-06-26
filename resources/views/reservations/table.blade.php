<div class="table-responsive">
    <table class="table" id="reservations-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Seat Id</th>
        <th>Line Id</th>
        <th>Start</th>
        <th>End</th>
        <th>Ticket Id</th>
        <th>Available</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->seat_id }}</td>
            <td>{{ $reservation->line_id }}</td>
            <td>{{ $reservation->start }}</td>
            <td>{{ $reservation->end }}</td>
            <td>{{ $reservation->ticket_id }}</td>
            <td>{{ $reservation->available }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['reservations.destroy', $reservation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reservations.show', [$reservation->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        {{-- <a href="{{ route('reservations.edit', [$reservation->id]) }}" class='btn btn-default btn-xs'>
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
