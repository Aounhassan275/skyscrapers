<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Exception;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('period.index');
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
            Period::create($request->all());
            toastr()->success('Period is Created Successfully');
			return response()->json([
				'success' => true,
				'message' => 'Period is Created Successfully'
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
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function edit(Period $period)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $period = Period::find($id);
        try{
            $period->update($request->all());
            toastr()->success('Period Informations Updated successfully');
			return response()->json([
				'success' => true,
				'message' => 'Period Informations Updated Successfully'
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
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $period = Period::find($id);
        $period->delete();
        toastr()->success('Period Deleted Successfully');
        return redirect()->back();
    }
}
