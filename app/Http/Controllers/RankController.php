<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Rank;
use View;

class RankController extends Controller
{
    protected $rank;

    public function __construct(Rank $rank)
    {
        $this->rank = $rank;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->rank->all();
    }

    public function create(){
        return View::make('rank.create');
    }

    public function store()
    {
        $rank = new Rank;
        $rank->rank = Input::get('rank');
        $rank->save();
        return Redirect::to('/rank');
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
