<!-- Start Field -->
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
