<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Bus Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bus_id', 'Bus Id:') !!}
    {!! Form::select('bus_id', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Schedule Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schedule_id', 'Schedule Id:') !!}
    {!! Form::select('schedule_id', ['' => ''], null, ['class' => 'form-control custom-select']) !!}
</div>
