<?php

namespace App\Http\Controllers;

use App\Models\create_event;
use Illuminate\Http\Request;

class CreateEventController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\create_event  $create_event
     * @return \Illuminate\Http\Response
     */
    public function show(create_event $create_event)
    {
        return view('frontend.createEvent');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\create_event  $create_event
     * @return \Illuminate\Http\Response
     */
    public function edit(create_event $create_event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\create_event  $create_event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, create_event $create_event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\create_event  $create_event
     * @return \Illuminate\Http\Response
     */
    public function destroy(create_event $create_event)
    {
        //
    }
}
