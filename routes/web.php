<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/consulta41', [ConsultasController::class, 'consulta41']);
Route::get('/consulta42', [ConsultasController::class, 'consulta42']);
Route::get('/consulta43', [ConsultasController::class, 'consulta43']);

