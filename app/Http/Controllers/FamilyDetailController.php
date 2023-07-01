<?php

namespace App\Http\Controllers;

use App\Models\family_detail;
use Illuminate\Http\Request;

class FamilyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::join('user_details', 'students.id', '=', 'user_details.id')
            ->join('business_details', 'students.id', '=', 'business_details.id')
            ->select('students.*', 'user_details.*', 'business_details.*')
            ->where('students.id', $id)
            ->first();


        return response()->json([
            'status' => 200,
            'student' => $student,
        ]);
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
        $request->validate([
            'inputs.*.name'=>'required'
        ],
        [
            'inputs.*.name'=>'the Name field is required!'
        ]
        );
        foreach($request->inputs as $key=>$value){
            family_detail::create($value);
        }
        return back()->with('success','The Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\family_detail  $family_detail
     * @return \Illuminate\Http\Response
     */
    public function show(family_detail $family_detail)
    {
         $request->validate([
            'inputs.*.name'=>'required'
        ],
        [
            'inputs.*.name'=>'the Name field is required!'
        ]
        );
        foreach($request->inputs as $key=>$value){
            Student::create($value);
        }
        return back()->with('success','The Post has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\family_detail  $family_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(family_detail $family_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\family_detail  $family_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, family_detail $family_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\family_detail  $family_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(family_detail $family_detail)
    {
        //
    }
}
