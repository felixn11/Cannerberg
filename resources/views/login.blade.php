@extends('layouts.master')
<style>
    body {
        background-image: url(images/Cannerberg-Entrance-Inside.jpg); /*You will specify your image path here.*/
        -moz-background-size: cover;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: top center !important;
        background-repeat: no-repeat !important;
        background-attachment: fixed;
    }
    .custom-form
    {
        border: 1px black solid;
        background-color: #F0F0E0;
        width: 400px;
        text-align: left;
        margin: 0 auto;
        font-style: normal;
        border-radius: 15px;
        letter-spacing: 2px;
    }
    .text-form
    {
        margin: 20px 20px;
    }
</style>

@section('login')
    <div class="custom-form">
        <div class = "text-form">
            {!! Form::open(array('url' => 'login', 'method' => 'post')) !!}
                        {!!Form::label('email','Email')!!}
                        {!!Form::text('email', null,array('class' => 'form-control'))!!}
                        {!!Form::label('password','Password')!!}
                        {!!Form::password('password',array('class' => 'form-control'))!!}
                        <br>
                        {!!Form::submit('Login', array('class' => 'btn btn-primary'))!!}

            {!! Form::close() !!}
        </div>
    </div>

@stop


