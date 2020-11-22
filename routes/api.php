<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CityController;





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->prefix('travel')->group(function (){
    Route::get('/', [TravelController::class, 'show']);
});

Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('city')->group(function () {
    Route::get('/', [CityController::class, 'show']);
});


Route::middleware('auth:sanctum')->prefix('travel')->group(function () {
    Route::get('/', [TravelController::class, 'index']);
    Route::post('/', [TravelController::class, 'store']);
    Route::get('/{id}', [TravelController::class, 'show']);
    Route::put('/{id}', [TravelController::class, 'update']);
    Route::delete('/{id}', [TravelController::class, 'delete']);
    Route::get('/calc', [TravelController::class, 'calc'])
});
