@extends('layouts.master')
<style>
    .col-md-4
    {
        padding-left: 0px !important;
    }
</style>
@section('title')
    <legend>Invoeren rang</legend>
@stop
@section('block1form')
    {!! Form::open(array('url' => 'rank')) !!}
    <div class="form-group">
        {!! Form::label('rank', 'Rang') !!}
        {!! Form::text('rank', Input::old('rank'), array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('Opslaan', array('class' => 'btn btn-primary'))!!}

    {!! Form::close() !!}
@stop