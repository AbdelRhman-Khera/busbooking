<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $reservation->id }}</p>
</div>

<!-- Seat Id Field -->
<div class="col-sm-12">
    {!! Form::label('seat_id', 'Seat Id:') !!}
    <p>{{ $reservation->seat_id }}</p>
</div>

<!-- Line Id Field -->
<div class="col-sm-12">
    {!! Form::label('line_id', 'Line Id:') !!}
    <p>{{ $reservation->line_id }}</p>
</div>

<!-- Start Field -->
<div class="col-sm-12">
    {!! Form::label('start', 'Start:') !!}
    <p>{{ $reservation->start }}</p>
</div>

<!-- End Field -->
<div class="col-sm-12">
    {!! Form::label('end', 'End:') !!}
    <p>{{ $reservation->end }}</p>
</div>

<!-- Ticket Id Field -->
<div class="col-sm-12">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    <p>{{ $reservation->ticket_id }}</p>
</div>

<!-- Available Field -->
<div class="col-sm-12">
    {!! Form::label('available', 'Available:') !!}
    <p>{{ $reservation->available }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $reservation->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $reservation->updated_at }}</p>
</div>

