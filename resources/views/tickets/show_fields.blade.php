<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ticket->id }}</p>
</div>

<!-- Schedule Id Field -->
<div class="col-sm-12">
    {!! Form::label('schedule_id', 'Schedule Id:') !!}
    <p>{{ $ticket->schedule_id }}</p>
</div>

<!-- Seat Id Field -->
<div class="col-sm-12">
    {!! Form::label('seat_id', 'Seat Id:') !!}
    <p>{{ $ticket->seat_id }}</p>
</div>

<!-- Bus Id Field -->
<div class="col-sm-12">
    {!! Form::label('bus_id', 'Bus Id:') !!}
    <p>{{ $ticket->bus_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ticket->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ticket->updated_at }}</p>
</div>

