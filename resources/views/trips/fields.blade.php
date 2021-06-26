<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('stations', 'Select all the stations that the bus passes through from start to end in the right sequence:') !!}

    <select class="select2" multiple="multiple" data-placeholder="Select a Station" style="width: 100%;" name="stations[]" required>
        @foreach ($stations as $station)
            <option value="{{ $station->id }}">{{ $station->name }}</option>
        @endforeach
    </select>
</div>
