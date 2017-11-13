<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\TutionInfo;
use Illuminate\Http\Request;

class TutionInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TutionInfo::all();
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
        TutionInfo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\TutionInfo  $tutionInfo
     * @return \Illuminate\Http\Response
     */
    public function show(TutionInfo $tutionInfo)
    {
        //
        return $tutionInfo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TutionInfo  $tutionInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(TutionInfo $tutionInfo)
    {
        //
        return $tutionInfo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TutionInfo  $tutionInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutionInfo $tutionInfo)
    {
        //
        $tutionInfo->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TutionInfo  $tutionInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TutionInfo $tutionInfo)
    {
        //
        $tutionInfo->users()->detach();
        $tutionInfo->delete();
    }
}
