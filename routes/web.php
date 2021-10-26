<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RefController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\SeqController;
use App\Http\Controllers\ArcitectureController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\EntitiesController;
use App\Http\Controllers\WireframesController;

use App\Models\Ref;

use Inertia\Inertia;

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
    return Inertia::render('App');
});



// Route::resources([
//     'ref' => RefController::class,
//     'guide' => GuideController::class,
//     'seq' => SeqController::class,
//     'arcitecture' => ArcitectureController::class,
//     'vitals_api' => ApiController::class,
//     'entities' => EntitiesController::class,
//     'wireframes' => WireframesController::class
// ]);

// Route::get('/ref_insert', function () {
//     DB::table('reference')->insert([
//         'title' => 'Laravel Pt 2', 'url' => 'https://laravel.com/docs/8.x', 'desc' => 'Another insert'
//     ]);
// });

// Route::get('/ref_data', function() {
//     $results = DB::select('select * from reference where id = ?', [3]);
//     return $results;
// });

// Route::get('/ref_update', function() {
//     $updated = DB::update('update reference set title="Updated Laravel" where id = ?', [3]);
//     return $updated;
// });

// Route::get('/ref_delete', function() {
//     $deleted = DB::delete('delete from reference where id = ?', [3]);
//     return $deleted;
// });

// Route::get('/read', function() {
//     $results = Ref::all();
//     foreach($results as $ref) {
//         return $ref->title;
//     }
// });

// Route::get('/find', function() {
//     $result = Ref::find(4);
//     return $result->title . " / " . $result->desc;
// });

// Route::get('/findId', function() {
//     $result = Ref::where('id', 5)->orderBy('id', 'asc')->take(1)->get();
//     return $result;
// });
