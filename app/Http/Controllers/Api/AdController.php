<?php

namespace App\Http\Controllers\Api;

use App\Filament\Resources\AdResource;
use App\Models\Ad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AdCollection;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return new AdCollection(Ad::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        // $ad = Ad::create($request->all());
        // return response()->json($ad, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,Ad $ad)
    {
        //
        // return new AdResource($ad);
        return new AdResource($ad);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ad)
    {
        //
        // $ad = Ad::findOrFail($ad);
        // $ad->update($request->all());
        // return response()->json($ad, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $ad)
    {
    //     //.
    //     Ad::findOrFail($ad)->delete();
    // return response()->json(null, 204);

    }
}
