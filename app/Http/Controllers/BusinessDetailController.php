<?php

namespace App\Http\Controllers;

use App\Models\business_detail;
use Illuminate\Http\Request;

class BusinessDetailController extends Controller
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
            'inputs.*.OrganisationName' => 'required|string',
            'inputs.*.OrganisationAddress' => 'nullable|string',
            'inputs.*.OrganisationState' => 'nullable|string',
            'inputs.*.OrganisationCity' => 'nullable|string',
            'inputs.*.OrganisationCountry' => 'nullable|string',
            'inputs.*.OrganisationPhone' => 'nullable|string',
            'inputs.*.OrganisationEmail' => 'nullable|string',
            'inputs.*.OrganisationPhotos' => 'nullable|image|max:2048',
        ]);

        $inputs = $validatedData['inputs'];

        foreach ($inputs as $input) {
            business_detail::create($input);
        }
        return back()->with('success','The Post has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\business_detail  $business_detail
     * @return \Illuminate\Http\Response
     */
    public function show(business_detail $business_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\business_detail  $business_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(business_detail $business_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\business_detail  $business_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, business_detail $business_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\business_detail  $business_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(business_detail $business_detail)
    {
        //
    }
}
