<?php

namespace App\Http\Controllers;

use App\Models\user_detail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
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
         $validatedData = $request->validate([
        'inputs.*.Name' => 'required|string',
        'inputs.*.FatherName' => 'nullable|string',
        'inputs.*.MotherName' => 'nullable|string',
        'inputs.*.Photo' => 'nullable|image|max:2048',
        'inputs.*.Phone' => 'nullable|string',
        'inputs.*.Email' => 'nullable|string',
        'inputs.*.DOB' => 'nullable|date',
        'inputs.*.Gender' => 'nullable|string',
        'inputs.*.Married' => 'nullable|string',
        'inputs.*.BloodGroup' => 'nullable|string',
        'inputs.*.Address' => 'nullable|string',
        'inputs.*.State' => 'nullable|string',
        'inputs.*.City' => 'nullable|string',
        'inputs.*.Pincode' => 'nullable|string',
        'inputs.*.Country' => 'nullable|string',
        'inputs.*.OriginAddress' => 'nullable|string',
        'inputs.*.OriginState' => 'nullable|string',
        'inputs.*.OriginCity' => 'nullable|string',
        'inputs.*.OriginPincode' => 'nullable|string',
    ]);

    $inputs = $validatedData['inputs'];

    foreach ($inputs as $input) {
        user_detail::create($input);
    }

    return back()->with('success', 'The Post has been added!');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function show(user_detail $user_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(user_detail $user_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_detail $user_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_detail $user_detail)
    {
        //
    }
}
