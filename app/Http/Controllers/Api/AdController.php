<?php

namespace App\Http\Controllers\Api;

use App\Models\Ad;
use Illuminate\Http\Request;
use App\Http\Resources\AdResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\AdResource;

class AdController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::paginate(10); // You can adjust the pagination as needed
        return AdResource::collection($ads);
    }

    // Show a single ad
    public function show(Ad $ad)
    {
        return new AdResource($ad);
    }

    // Store a new ad
    public function store(Request $request)
    {
        $ad = Ad::create($request->all());

        return new AdResource($ad);
    }

    // Update an ad
    public function update(Request $request, Ad $ad)
    {
        $ad->update($request->all());

        return new AdResource($ad);
    }

    // Delete an ad
    public function destroy(Ad $ad)
    {
        $ad->delete();

        return response()->json(['message' => 'Ad deleted successfully']);
    }
}
=======
   // Show a list of ads
   public function index()
   {
       $ads = Ad::paginate(10); // You can adjust the pagination as needed
       return AdResource::collection($ads);
   }

   // Show a single ad
   public function show(Ad $ad)
   {
       return new AdResource($ad);
   }

   // Store a new ad
   public function store(Request $request)
   {
       $ad = Ad::create($request->all());

       return new AdResource($ad);
   }

   // Update an ad
   public function update(Request $request, Ad $ad)
   {
       $ad->update($request->all());

       return new AdResource($ad);
   }

   // Delete an ad
   public function destroy(Ad $ad)
   {
       $ad->delete();

       return response()->json(['message' => 'Ad deleted successfully']);
   }
}
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
