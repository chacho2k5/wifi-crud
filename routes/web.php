<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\ReservaController;
use Illuminate\Auth\Events\Login;
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
    return view('welcome');
    //return view('auth.Login');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
    ->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/dashboard', function () {
//         return view('dashboard')->name('dashboard');
// });

// Route::resource('niveles',NivelController::class);

Route::resource('articulos',ArticuloController::class);
Route::resource('reservas',ReservaController::class);
