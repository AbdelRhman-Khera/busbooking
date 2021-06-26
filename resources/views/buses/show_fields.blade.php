<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $bus->id }}</p>
</div>

<!-- Number Field -->
<div class="col-sm-12">
    {!! Form::label('number', 'Number:') !!}
    <p>{{ $bus->number }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $bus->name }}</p>
</div>

<!-- Seats Num Field -->
<div class="col-sm-12">
    {!! Form::label('seats_num', 'Seats Num:') !!}
    <p>{{ $bus->seats_num }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $bus->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $bus->updated_at }}</p>
</div>

