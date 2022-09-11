<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Exception;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subject.index');
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
            Subject::create($request->all());
            toastr()->success('Subject is Created Successfully');
			return response()->json([
				'success' => true,
				'message' => 'Subject is Created Successfully'
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
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $subject = Subject::find($id);
        try{
            $subject->update($request->all());
            toastr()->success('Subject Informations Updated successfully');
			return response()->json([
				'success' => true,
				'message' => 'Subject Informations Updated Successfully'
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
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        toastr()->success('Subject Deleted Successfully');
        return redirect()->back();
    }
}
