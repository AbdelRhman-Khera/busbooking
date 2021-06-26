<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $line->id }}</p>
</div>

<!-- Start Field -->
<div class="col-sm-12">
    {!! Form::label('start', 'Start:') !!}
    <p>{{ $line->starts->name }}</p>
</div>

<!-- End Field -->
<div class="col-sm-12">
    {!! Form::label('end', 'End:') !!}
    <p>{{ $line->ends->name }}</p>
</div>

<!-- Trip Id Field -->
<div class="col-sm-12">
    {!! Form::label('trip_id', 'Trip Id:') !!}
    <p>{{ $line->trips->name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $line->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $line->updated_at }}</p>
</div>

