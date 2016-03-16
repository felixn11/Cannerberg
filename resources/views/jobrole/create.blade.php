@extends('layouts.master')
<style>
    .col-md-4
    {
        padding-left: 0px !important;
    }
</style>
@section('title')
    <legend>Invoeren functie</legend>
@stop
@section('block1form')
    {!! Form::open(array('url' => 'jobrole')) !!}
    <div class="form-group">
        {!! Form::label('jobrole', 'Functie') !!}
        {!! Form::text('jobrole', Input::old('jobrole'), array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('Opslaan', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
@stop