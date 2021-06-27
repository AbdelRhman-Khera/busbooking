<div class="table-responsive">
    <table class="table" id="lines-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Start</th>
                <th>End</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lines as $line)
                <tr>
                    <td>{{ $line->id }}</td>
                    <td>{{ $line->starts->name }}</td>
                    <td>{{ $line->ends->name }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['lines.destroy', $line->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('lines.show', [$line->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            {{-- <a href="{{ route('lines.edit', [$line->id]) }}" class='btn btn-default btn-xs'>
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
