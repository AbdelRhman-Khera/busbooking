<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $seat->id }}</p>
</div>

<!-- Number Field -->
<div class="col-sm-12">
    {!! Form::label('number', 'Number:') !!}
    <p>{{ $seat->number }}</p>
</div>

<!-- Bus Id Field -->
<div class="col-sm-12">
    {!! Form::label('bus_id', 'Bus Id:') !!}
    <p>{{ $seat->bus_id }}</p>
</div>

<!-- Schedule Id Field -->
<div class="col-sm-12">
    {!! Form::label('schedule_id', 'Schedule Id:') !!}
    <p>{{ $seat->schedule_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $seat->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $seat->updated_at }}</p>
</div>

