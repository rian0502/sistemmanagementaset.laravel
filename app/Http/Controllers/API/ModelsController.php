<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Models::all();

        return response()->json($data);
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
     * @param  \App\Models\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function show(Models $models)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Models $models)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function destroy(Models $models)
    {
        //
    }
}
