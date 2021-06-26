<!-- Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start', 'Start:') !!}
    {!! Form::select('start', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end', 'End:') !!}
    {!! Form::select('end', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Trip Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trip_id', 'Trip Id:') !!}
    {!! Form::select('trip_id', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>
