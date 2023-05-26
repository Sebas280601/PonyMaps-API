<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/import', function () {
        return view('import');
    })->name('import');

    Route::post('/import', [Controller::class, 'importExcel'])->name('horarios.import');

    Route::post('/import', [Controller::class, 'importExcel'])->name('horarios.import');

    Route::get('/horariosVista', 'App\Http\Controllers\horariosCrud@index')->name('horariosVista');

    Route::get('/inserta', 'App\Http\Controllers\horariosCrud@insertar')->name('vistaInsertar');

    Route::post('/InsertarU', 'App\Http\Controllers\horariosCrud@insertarU')->name('insertU');

    Route::get('/Cactualiza/{id}', 'App\Http\Controllers\horariosCrud@actualiza')->name('vistaActualizar');

    Route::put('/ActualizadoC/{id}', 'App\Http\Controllers\horariosCrud@actualizaU')->name('update');

    Route::delete('/elimina/{id}', 'App\Http\Controllers\horariosCrud@elimina')->name('eliminar');

    Route::get('/eliminaTodo', 'App\Http\Controllers\horariosCrud@eliminaT')->name('eliminarT');
});
