<?php

use App\Http\Controllers\CommentController;
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
Route::get('/', [EventController::class, 'home']);
Route::get('/home', [EventController::class, 'index']);
Route::delete('/home/{id}', [EventController::class, 'destroy'])->name('delete_event')->middleware('admin');

Route::get('/cadastrar', [EventController::class, 'create']);
Route::post('/cadastrar', [EventController::class, 'store']);

Route::get('/chamado/{id}', [EventController::class, 'show']);
Route::post('/chamado', [CommentController::class, 'store'])->name('comment')->middleware('admin');
Route::delete('/chamado/{id}', [CommentController::class, 'destroy'])->middleware('admin');

Route::delete('/home/{id}', [EventController::class, 'destroy'])->name('delete_event')->middleware('admin');

Route::get('/chamado/editar/{id}', [EventController::class, 'edit']);
Route::post('/chamado/editar/{id}', [EventController::class, 'update'])->name('alter_event');




Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::group(['middleware' => ['guest']], function () {

        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    });
});
