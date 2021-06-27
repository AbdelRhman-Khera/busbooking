<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('Start station', 'Start station:') !!}

    <select class="select2" data-placeholder="Select a station" style="width: 100%;" name="start" required>
        @foreach ($stations as $station)
            <option value="{{ $station->id }}">{{ $station->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group col-sm-12">
    {!! Form::label('end station', 'End station:') !!}

    <select class="select2" data-placeholder="Select a station" style="width: 100%;" name="end" required>
        @foreach ($stations as $station)
            <option value="{{ $station->id }}">{{ $station->name }}</option>
        @endforeach
    </select>
</div>


<div class="form-group col-sm-12">
    {!! Form::label('lines', 'Select all the lines that the bus passes through from start to end in the right sequence:') !!}

    <select class="select2" multiple="multiple" data-placeholder="Select a line" style="width: 100%;" name="lines[]" required>
        @foreach ($lines as $line)
            <option value="{{ $line->id }}">From-{{ $line->starts->name }}-To-{{ $line->ends->name }}</option>
        @endforeach
    </select>
</div>
