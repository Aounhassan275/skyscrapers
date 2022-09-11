<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teacher.index');
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
            Teacher::create($request->all());
            toastr()->success('Teacher is Created Successfully');
			return response()->json([
				'success' => true,
				'message' => 'Teacher is Created Successfully'
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
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        $teacher_schedules = Schedule::where('teacher_id',$id)->orderBy('display_order','ASC')->get();
        return view('teacher.show',compact('teacher','teacher_schedules'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $teacher = Teacher::find($id);
        try{
            Validator::make($request->all(),[
                'name' => 'required|teachers'
            ]);
            $teacher->update($request->all());
            toastr()->success('Teacher Informations Updated successfully');
			return response()->json([
				'success' => true,
				'message' => 'Teacher Informations Updated Successfully'
			],200);
        }catch(Exception $e)
        {
			return response()->json([
				'message' => $e->getMessage(),
			],422);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        toastr()->success('Teacher Deleted Successfully');
        return redirect()->back();
    }
}
