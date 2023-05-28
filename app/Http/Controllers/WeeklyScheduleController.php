<?php

namespace App\Http\Controllers;

use App\Models\WeeklySchedule;
use Illuminate\Http\Request;

class WeeklyScheduleController extends Controller
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
        return view('weekly-schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'number_of_people' => 'required|integer|min:1',
        ]);

        WeeklySchedule::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'number_of_people' => $request->number_of_people,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('weekly-schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function createDetails($id)
    {
        $weeklySchedule = WeeklySchedule::findOrFail($id);

        return view('weekly-schedule.create-details', compact('weeklySchedule'));
    }
}
