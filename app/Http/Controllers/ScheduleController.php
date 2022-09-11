<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class ScheduleController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $already_have_period = Schedule::where('period_id',$request->period_id)->where('teacher_id',$request->teacher_id)->first();
            if($already_have_period)
            {
                return response()->json([
                    'message' => 'Period Slot Already Exists.',
                ],422);
            }
            Schedule::create($request->all());
            toastr()->success('Teacher Schedule is Created Successfully');
			return response()->json([
				'success' => true,
				'message' => 'Teacher Schedule is Created Successfully'
			],200);
        }catch(Exception $e)
        {
			return response()->json([
				'message' => $e->getMessage(),
			],422);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::find($id);
        return view('teacher_schedule.edit',compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $schedule = Schedule::find($id);
        if($request->period_id)
        {
            $already_have_period = Schedule::where('period_id',$request->period_id)->where('teacher_id',$schedule->teacher_id)->first();
            if($already_have_period)
            {
                toastr()->error('Period Slot Already Exists.');
                return back();
            }
        }
        $request->merge([
            'break_time' => $request->break_time?1:0,
            'teacher_meeting' => $request->teacher_meeting?1:0,
            'meeting_and_break_time' => $request->meeting_and_break_time?1:0,
            'off' => $request->off
            ?1:0,
        ]);
        $schedule->update($request->all());
        toastr()->success('Teacher Schedule Informations Updated successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();
        toastr()->success('Schedule Deleted Successfully');
        return redirect()->back();
    }
}
