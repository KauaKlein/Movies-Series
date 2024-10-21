<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\SeasonController;
use App\Models\Actors;

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

// Route::apiResource('movies', MoviesController::class); //get, post, put, delete

Route::get('movies', [MoviesController::class, 'index']);
Route::get('movies/{id}', [MoviesController::class, 'show'])->where('id', '[0-9]+');
Route::post('movies', [MoviesController::class, 'store']);
Route::put('movies/{id}', [MoviesController::class, 'update']);
Route::delete('movies/{id}', [MoviesController::class, 'destroy']);

// =================================== SERIES ===================================

Route::get("series", [SeriesController::class,'index']); // lista todas as series

Route::get("series/{id_series}", [SeriesController::class,"show"]); // lista somente 1 serie

Route::get("series/{id_series}/season", [SeriesController::class,"showSeason"]); // lista todas as temporadas

Route::get("series/{id_series}/season/{id_season}", [SeasonController::class,"show"]); // lista apenas uma temporada

Route::post('series', [SeriesController::class, 'store']); // cadastra uma nova serie

Route::put("series/{id}", [SeriesController::class,"update"]); // atualiza a serie

Route::delete("series/{id}", [SeriesController::class, "destroy"]); // exclui uma serie










































// =================================== ACTORS ===================================

// Route::get("actors", [ActorsController::class,'index']);
// Route::get("actors/{id}", [ActorsController::class,"show"]) ->where("id", "[0-9]+");
// Route::post('actors', [ActorsController::class, 'store']);
// Route::put("actors/{id}", [ActorsController::class,"update"]);
// Route::delete("actors/{id}", [ActorsController::class, "destroy"]);

//====================================

