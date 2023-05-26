<?php

use App\Http\Controllers\API\horarioApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('edificios', horarioApiController::class);
Route::get('horario/edificio/{id}', 'App\Http\Controllers\API\horarioApiController@salon')->name('horario.salon');
Route::get('horario/edificio/horario/{id}', 'App\Http\Controllers\API\horarioApiController@horario')->name('horario.horario');
Route::get('horario/edificio/horario/materia/{id}', 'App\Http\Controllers\API\horarioApiController@materia')->name('horario.materia');
Route::get('horario', [horarioApiController::class, 'horariosCompletos'])->name('horario.todos');
