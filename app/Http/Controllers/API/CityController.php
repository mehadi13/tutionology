<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return City::all();
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
        City::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return $city;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        return $city;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $city->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->locations()->delete();
        $city->delete();
    }
}
