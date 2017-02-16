<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// --- CORE ROUTES ONLY
Route::get('/logout', 'LogOutController@index');
Route::get('/', 'DashboardController@index');

// ----------------- GENERIC ROUTES FOR EVERY PROJECT GO HERE ----------

Route::resource('page', 'PageController');
Route::resource('section', 'SectionController');


// ------ CUSTOM ROUTES GO UNDERNEATH HERE ----------------
Route::resource('event', 'EventController');
Route::resource('news', 'API\NewsController');