<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\ClassName;
use Illuminate\Http\Request;

class ClassNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClassName::all();
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
        $className = ClassName::create($request->all());

        return response()->json($className, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ClassName  $className
     * @return \Illuminate\Http\Response
     */
    public function show(ClassName $className)
    {
        return $className;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ClassName  $className
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassName $className)
    {
        //
        return $className;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ClassName  $className
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassName $className)
    {
        $className->update($request->all());

        return response()->json($className, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ClassName  $className
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassName $className)
    {
        $className->delete();

        return response()->json(null, 204);
    }
}
