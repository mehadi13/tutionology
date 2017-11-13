<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Location::all();
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
        Location::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(location $location)
    {
        //
        return $location;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(location $location)
    {
        //
        return $location;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, location $location)
    {
        //
        $location->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(location $location)
    {
        //
        $location->delete();
    }
}
