<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepModelController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/steps', [StepModelController::class, 'index']);
Route::prefix('/step')->group(function() {
    Route::post('/store', [StepModelController::class, 'store']);
    Route::put('/{id}', [StepModelController::class, 'update']);
    Route::delete('/{id}', [StepModelController::class, 'destroy']);
});

Route::get('/test', [StepModelController::class, 'testing']);
