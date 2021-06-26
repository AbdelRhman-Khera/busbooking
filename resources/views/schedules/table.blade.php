<div class="table-responsive">
    <table class="table" id="schedules-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Bus Id</th>
                <th>Trip</th>
                <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->id }}</td>
                    <td>{{ $schedule->name }}</td>
                    <td>{{ $schedule->bus_id }}</td>
                    <td>{{ $schedule->trip->name }}</td>
                    <td>{{ $schedule->date }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['schedules.destroy', $schedule->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('schedules.show', [$schedule->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('schedules.edit', [$schedule->id]) }}" class='btn btn-default btn-xs'>
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
