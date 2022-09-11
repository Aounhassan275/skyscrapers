<?php

namespace App\Http\Controllers;

use App\Models\TeacherClass;
use Exception;
use Illuminate\Http\Request;

class TeacherClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('class.index');
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
            TeacherClass::create($request->all());
            toastr()->success('Class is Created Successfully');
			return response()->json([
				'success' => true,
				'message' => 'Class is Created Successfully'
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
     * @param  \App\Models\TeacherClass  $teacherClass
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherClass $teacherClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherClass  $teacherClass
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherClass $teacherClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeacherClass  $teacherClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $teacher_class = TeacherClass::find($id);
        try{
            $teacher_class->update($request->all());
            toastr()->success('Class Informations Updated successfully');
			return response()->json([
				'success' => true,
				'message' => 'Class Informations Updated Successfully'
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
     * @param  \App\Models\TeacherClass  $teacherClass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $teacher_class = TeacherClass::find($id);
        $teacher_class->delete();
        toastr()->success('Class Deleted Successfully');
        return redirect()->back();
    }
}
