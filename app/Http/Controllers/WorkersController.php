<?php

namespace App\Http\Controllers;

use App\Workers;
use App\WorkersType;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $worktypes = WorkersType::all();
        return view('workers.createwoker', ['worktypes' => $worktypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function show(Workers $workers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function edit(Workers $workers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workers $workers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workers $workers)
    {
        //
    }
}
