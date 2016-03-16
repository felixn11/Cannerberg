@extends('layouts.master')
<style>
    label {
        width:100px;
        clear:left;
        text-align:left;
        padding-right:10px;
    }

    .col-lg-5
    {
        padding-left: 0px !important;
        width: 50% !important;
    }

    .block2
    {
        display: inline-block;
        width: 400px;
        text-align: left;
        opacity: 100;
        margin: 20px 20px;
        z-index: 5;
        float: right;
    }
</style>

@section('title')
<legend>Invoeren medewerker</legend>
@stop
<!-- Text input-->
@section('block1form')
    {!! Form::open(array('url' => 'employee', 'files' => true)) !!}
<form class="form-horizontal">
    <div class="form-group">
        {!! Form::label('firstname', 'Voornaam') !!}
        {!! Form::text('firstname', Input::old('firstname'), array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lastname', 'Achternaam') !!}
        {!! Form::text('lastname', Input::old('lastname'), array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nationaliteit', 'Nationaliteit') !!} <br>
        {!! Form::select('nationalityid', App\Models\Nationality::all(['nationality', 'id'])->pluck('nationality', 'id')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Afdeling', 'Afdeling') !!} <br>
        {!! Form::select('departmentid', App\Models\Department::lists('department', 'id'))!!}
    </div>
    <div class="form-group">
        {!! Form::label('Rang', 'Rang') !!} <br>
        {!!Form::select('rankid', App\Models\Rank::lists('rank', 'id'), array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Functie', 'Functie') !!}<br>
        {!! Form::select('jobroleid', App\Models\Jobrole::lists('jobrole', 'id'), array('class' => 'form-control')) !!}
    </div>
    {!! Form::label('Gewerktvantot', 'Van/tot') !!}<br>
    <div class='col-lg-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control" name="workedfrom" />
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-lg-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control" name="workedtill" />
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker6').datetimepicker({
                format: "YYYY",
                defaultDate: "1950"
            });
            $('#datetimepicker7').datetimepicker({
                format: "YYYY",
                defaultDate: "1970"
            });
            $("#datetimepicker6").on("dp.change",function (e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker7").on("dp.change",function (e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>

    <br>
    {!! Form::submit('Opslaan', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}
</form>
@stop

@section('block2form')
<div class="block2">
    <div class="form-group">
        {!! Form::label('Foto') !!}
        {!! Form::file('image', null) !!}
    </div>
</div>
@stop



