<div class="table-responsive">
    <table class="table" id="seats-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Number</th>
                <th>Bus Id</th>
                <th>Schedule Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($seats as $seat)
                <tr>
                    <td>{{ $seat->id }}</td>
                    <td>{{ $seat->number }}</td>
                    <td>{{ $seat->bus_id }}</td>
                    <td>{{ $seat->schedule_id }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['seats.destroy', $seat->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('seats.show', [$seat->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            {{-- <a href="{{ route('seats.edit', [$seat->id]) }}" class='btn btn-default btn-xs'>
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
