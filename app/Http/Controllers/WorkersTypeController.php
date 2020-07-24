<?php

namespace App\Http\Controllers;

use App\WorkersType;
use Illuminate\Http\Request;
use Validator;

class WorkersTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workersType = WorkersType::all();
        return view('worktype.editworktype', ['workersTypes' => $workersType]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('worktype.createworktype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['work_type' => 'required|string|max:45|unique:workers_types,worktype'];

        $result = Validator::make($request->all(), $rules);

        if ($result->fails()) {
            return back()->withErrors($result)->withInput($request->all())->with('error', __('Something Wrong'));
        }

        $worktype = new WorkersType();
        $worktype->worktype = $request->get('work_type');
        $worktype->save();
        return redirect()->back()->with('success', __('Add Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkersType  $workersType
     * @return \Illuminate\Http\Response
     */
    public function show(WorkersType $workersType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkersType  $workersType
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkersType $workersType)
    {


        return view('worktype.updateworktype', ['workerType' => $workersType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkersType  $workersType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkersType $workersType)
    {


        $rules = ['work_type' => 'required|string|max:45|unique:workers_types,worktype'];

        $result = Validator::make($request->all(), $rules);

        if ($result->fails()) {

            return back()->withErrors($result)->withInput($request->all())->with('error', __('Something Wrong'));
        }

        $worktype = WorkersType::find($workersType->id); // get the selected work type from id
        $worktype->worktype = $request->get('work_type');
        $worktype->save();
        return redirect()->route('worktype.index')->with('success', __('Edit Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkersType  $workersType
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkersType $workersType)
    {
        $worktype = WorkersType::find($workersType->id); // get the selected work type from id
        /*if($worktype)
        {
          $worktype->delete();
        }*/
        return redirect()->route('worktype.index')->with('success', __('Delete Successfully'));
    }
}
