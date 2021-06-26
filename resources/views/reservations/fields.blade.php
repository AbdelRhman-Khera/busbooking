<!-- Seat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seat_id', 'Seat Id:') !!}
    {!! Form::select('seat_id', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Line Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('line_id', 'Line Id:') !!}
    {!! Form::select('line_id', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start', 'Start:') !!}
    {!! Form::select('start', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end', 'End:') !!}
    {!! Form::select('end', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Ticket Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    {!! Form::number('ticket_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Available Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('available', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('available', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('available', 'Available', ['class' => 'form-check-label']) !!}
    </div>
</div>
