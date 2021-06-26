<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Seats Num Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seats_num', 'Seats Num:') !!}
    {!! Form::number('seats_num', null, ['class' => 'form-control']) !!}
</div>