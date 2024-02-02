<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/ads', App\Http\Controllers\Api\AdController::class)->only(['index', 'show']);
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('/ads', AdController::class)->only(['update', 'store', 'destory']);
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', function () {
        return auth()->user(); // Access authenticated user data
    });
    // ... other protected routes
});