<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Role Id</th>
                <th>Email</th>
                <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role_id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            {{-- <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
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