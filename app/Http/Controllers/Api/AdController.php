<?php

namespace App\Http\Controllers\Api;

use App\Models\Ad;
use Illuminate\Http\Request;
use App\Http\Resources\AdResource;
use App\Http\Controllers\Controller;

class AdController extends Controller
{
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
