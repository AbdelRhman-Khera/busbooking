<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $schedule->id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $schedule->name }}</p>
</div>

<!-- Bus Id Field -->
<div class="col-sm-12">
    {!! Form::label('bus_id', 'Bus Id:') !!}
    <p>{{ $schedule->bus_id }}</p>
</div>

<!-- Trip Id Field -->
<div class="col-sm-12">
    {!! Form::label('trip_id', 'Trip:') !!}
    <p>{{ $schedule->trip->name }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $schedule->date }}</p>
</div>

<!-- Tickets -->
<div class="col-sm-12">
    {!! Form::label('tickets', 'Tickets:') !!}
    {{-- @foreach ($trip->lines as $index=>$item)
    <p>{{ $index+1 }}- From {{ $item->starts->name }} To {{ $item->ends->name }}</p>
    @endforeach --}}
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $schedule->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $schedule->updated_at }}</p>
</div>

