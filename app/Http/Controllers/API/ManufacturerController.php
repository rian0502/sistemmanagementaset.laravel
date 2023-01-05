<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Dflydev\DotAccessData\Data;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturer = Manufacturer::all();
        return response()->json([
            'data' => $manufacturer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manufacturer = Manufacturer::create([
            'uuid' => Uuid::uuid4()->toString(),
            'nama_manufactur' => $request->nama_manufactur
        ]);
        return response()->json([
            'data' => $manufacturer
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function show($data)
    {
        $data = Manufacturer::all();
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ([
            'nama_manufactur' => $request->nama_manufactur
        ]);
        echo 'data update';
        Manufacturer::where(['uuid'=>$id])->update($data);
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manufacturer::where(['uuid'=>$id])->delete();
    }
}
