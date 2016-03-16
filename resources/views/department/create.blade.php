@extends('layouts.master')
<style>
    .col-md-4
    {
        padding-left: 0px !important;
    }
</style>
@section('title')
    <legend>Invoeren afdeling</legend>
@stop
@section('block1form')
    {!! Form::open(array('url' => 'department')) !!}
    <div class="form-group">
        {!! Form::label('department', 'Afdeling') !!}
        {!! Form::text('department', Input::old('department'), array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('Opslaan', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
@stop