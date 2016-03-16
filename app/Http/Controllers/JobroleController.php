<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Models\Jobrole;
use View;
use Illuminate\Support\Facades\Input;

class JobroleController extends Controller
{
    protected $jobrole;

    public function __construct(Jobrole $jobrole)
    {
        $this->jobrole = $jobrole;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->jobrole->all();
    }

    public function create(){
        return View::make('jobrole.create');
    }

    public function store()
    {
        $jobrole = new Jobrole;
        $jobrole->jobrole = Input::get('jobrole');
        $jobrole->save();
        return Redirect::to('jobrole');
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
