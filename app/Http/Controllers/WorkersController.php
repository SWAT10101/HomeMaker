<?php

namespace App\Http\Controllers;

use App\Workers;
use App\WorkersType;
use Illuminate\Http\Request;
use Validator;

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
        $rules = ['First_Name' => 'required|string|max:45',
                  'Middle_Name' => 'required|string|max:45',
                  'Last_Name' => 'required|string|max:45',
                  'Phone_Number' => 'required|numeric|digits:10',
                  'WorkType' => 'required'];

       $result = Validator::make($request->all(), $rules);

        if ($result->fails()) {
            return redirect()->back()->withErrors($result)->withInput($request->all())->with('error', __('Something Wrong'));
        }

        $workers = new Workers();
        $workers->first_name = $request->get('First_Name');
        $workers->middle_name = $request->get('Middle_Name');
        $workers->last_name = $request->get('Last_Name');
        $workers->phone = $request->get('Phone_Number');
        $workers->workers_types_id = $request->get('WorkType');
        $workers->save();
        return redirect()->back()->with('success', __('Add Successfully'));

        dd($request->all());
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
