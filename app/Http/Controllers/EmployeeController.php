<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Employee;
use App\Models\Nationality;
use View;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use Illuminate\Contracts\Pagination;

class EmployeeController extends Controller
{
    protected $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the employees
        $employee = Employee::paginate(5);

        // load the view and pass the employees
        return View::make('employee.index')
            ->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the nerd
        $employee = Employee::find($id);

        // show the edit form and pass the nerd
        return View::make('employee.edit')
            ->with('employee', $employee);
    }

    public function update($id){
        // validate
        // read more on validation at http://laravel.com/docs/validation
        /*
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'nerd_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('employee/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {*/
            // store
        $employee = Employee::find($id);
        $employee->firstname       = Input::get('name');
        $employee->lastname      = Input::get('lastname');
        $employee->jobroleid       = Input::get('jobroleid');
        $employee->rankid       = Input::get('rankid');
        $employee->nationalityid = Input::get('nationalityid');
        $employee->departmentid      = Input::get('departmentid');
        $employee->save();
        // redirect
        return Redirect::to('employee');

    }


    public function create(){
        return View::make('employee.create');
    }

    public function store()
    {
        $employee = new Employee;
        if(Input::hasfile('image')){
            $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('profilepics/' . $filename);

            Image::make($image->getRealPath())
                ->save($path);

            echo $path;
        }

        $employee->firstname = Input::get('firstname');
        $employee->lastname = Input::get('lastname');
        $employee->departmentid = Input::get('departmentid');
        $employee->rankid = Input::get('rankid');
        $employee->jobroleid = Input::get('jobroleid');
        $employee->nationalityid = Input::get('nationalityid');
        $employee->workedfrom = Input::get('workedfrom');
        $employee->workedtill = Input::get('workedtill');
        $employee->save();
        return Redirect::to('employee');
    }
}
