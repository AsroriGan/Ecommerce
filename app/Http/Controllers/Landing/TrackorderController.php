<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Trackorder;
use Illuminate\Http\Request;

class TrackorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indextrack()
    {
        return view('landingpage.trackorder.trackorder');
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
     * @param  \App\Models\Trackorder  $trackorder
     * @return \Illuminate\Http\Response
     */
    public function show(Trackorder $trackorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trackorder  $trackorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Trackorder $trackorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trackorder  $trackorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trackorder $trackorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trackorder  $trackorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trackorder $trackorder)
    {
        //
    }
}
