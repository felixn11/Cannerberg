@extends('layouts.master')
@section('table')
    <h1>Edit employee</h1>

    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}

    {!! Form::model($employee, array('route' => array('employee.update', $employee->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('namelabel', 'Name') !!}
        {!! Form::text('name', $employee->firstname, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastnamelabel', 'Lastname') !!}
        {!! Form::text('lastname', $employee->lastname, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('jobrolelabel', 'Jobrole') !!}
        {!! Form::select('jobroleid', App\Models\Jobrole::lists('jobrole', 'id'), $employee->jobrole["jobroleid"]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ranklabel', 'Rank') !!}
        {!!Form::select('rankid', App\Models\Rank::lists('rank', 'id'), $employee->rank["rankid"]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nationalitylabel', 'Nationality') !!}
        {!! Form::select('nationalityid', App\Models\Nationality::lists('nationality', 'id'), $employee->nationality["nationalityid"]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('departmentlabel', 'Department') !!}
        {!! Form::select('departmentid', App\Models\Department::lists('department', 'id'),$employee->department["departmentid"] )!!}
    </div>

    {!! Form::submit('Edit employee!', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
@stop