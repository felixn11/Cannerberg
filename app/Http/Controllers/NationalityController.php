<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Models\Nationality;
use View;
use Illuminate\Support\Facades\Input;

class NationalityController extends Controller
{
    protected $nationality;

    public function __construct(Nationality $nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->nationality->all();
    }

    public function create(){
        return View::make('nationality.create');
    }

    public function store()
    {
        $nationality = new \App\Models\Nationality;
        $nationality->nationality = Input::get('nationality');
        $nationality->save();
        return Redirect::to('nationality');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
