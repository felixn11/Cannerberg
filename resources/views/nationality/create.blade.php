@extends('layouts.master')
<style>
    .col-md-4
    {
        padding-left: 0px !important;
    }
</style>
@section('title')
    <legend>Invoeren nationaliteit</legend>
@stop
@section('block1form')
    {!! Form::open(array('url' => 'nationality')) !!}
    <div class="form-group">
        {!! Form::label('nationality', 'Nationaliteit') !!}
        {!! Form::text('nationality', Input::old('nationality'), array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('Opslaan', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
@stop