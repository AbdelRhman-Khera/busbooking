<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bus Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bus_id', 'Bus:') !!}
    <select name="bus_id" id="" class="form-control custom-select" required>
        @foreach ($buses as $bus)
            <option value="{{ $bus->id  }}">{{ $bus->name }}-{{ $bus->number }}</option>
        @endforeach
    </select>
</div>


<!-- Trip Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trip_id', 'Trip:') !!}
    <select name="trip_id" id="" class="form-control custom-select" required>
        @foreach ($trips as $trip)
            <option value="{{ $trip->id  }}">{{ $trip->name }}</option>
        @endforeach
    </select>
</div>


<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush
