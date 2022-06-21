<?php

use App\Http\Controllers\EventController;
use App\Models\Event;
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

Route::get('/registrar', [EventController::class, 'create']);
Route::post('/registrar', [EventController::class, 'store']);
Route::get('/', [EventController::class, 'index']);
Route::get('/editar/{id}', [EventController::class, 'show']);

