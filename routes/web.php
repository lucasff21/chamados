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

Route::get('/cadastrar', [EventController::class, 'create']);
Route::post('/cadastrar', [EventController::class, 'store']);
Route::get('/editar/{id}', [EventController::class, 'show'])->middleware('admin');

Route::post('/editar/{id}', [EventController::class, 'addComent']);


Route::get('get-comments/{id}', [EventController::class, 'getComments']);
Route::get('get-post/{id}', [EventController::class, 'getPost']);

  Route::get('/home', [EventController::class, 'index']);

  Route::get('/', [EventController::class, 'home']);


Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::group(['middleware' => ['guest']], function () {

      //  Route::get('/home', 'HomeController@index')->name('home.chamados');

        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    });
});
