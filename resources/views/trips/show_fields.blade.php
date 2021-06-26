<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $trip->id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $trip->name }}</p>
</div>

<!-- Lines -->
<div class="col-sm-12">
    {!! Form::label('lines', 'Lines:') !!}
    @foreach ($trip->lines as $index=>$item)
    <p>{{ $index+1 }}- From {{ $item->starts->name }} To {{ $item->ends->name }}</p>
    @endforeach

</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $trip->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $trip->updated_at }}</p>
</div>

