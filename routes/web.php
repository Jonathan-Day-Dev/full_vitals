<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RefController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\SeqController;
use App\Http\Controllers\ArcitectureController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\EntitiesController;
use App\Http\Controllers\WireframesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'ref' => RefController::class,
    'guide' => GuideController::class,
    'seq' => SeqController::class,
    'arcitecture' => ArcitectureController::class,
    'vitals_api' => ApiController::class,
    'entities' => EntitiesController::class,
    'wireframes' => WireframesController::class
]);
