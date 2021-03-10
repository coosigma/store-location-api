<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreLocation;
use App\Http\Resources\StoreLocationResource;

class StoreLocationController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stores = StoreLocation::all();
        return response(['stores' => StoreLocationResource::collection($stores),
            'message' => 'Retrieved successfully'], 200);
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
        $data = $request->all();

        $store = StoreLocation::create($data);

        return response(['store' => new StoreLocationResource($store),
            'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreLocation  $store
     * @return \Illuminate\Http\Response
     */
    public function show(StoreLocation $store)
    {
        //
        return response(['store' => new StoreLocationResource($store),
            'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StoreLocation  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreLocation $store)
    {
        //
        $store->update($request->all());

        return response(['store' => new StoreLocationResource($store),
            'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreLocation  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreLocation $store)
    {
        //
        $store->delete();

        return response(['message' => 'Deleted'], );
    }

}
