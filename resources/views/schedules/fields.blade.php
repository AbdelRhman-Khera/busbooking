<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bus Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bus_id', 'Bus Id:') !!}
    {!! Form::select('bus_id', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Trip Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trip_id', 'Trip Id:') !!}
    {!! Form::select('trip_id', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush