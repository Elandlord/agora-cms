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


// ------ CUSTOM ROUTES GO UNDERNEATH HERE ----------------
Route::resource('event', 'API\EventController');
Route::resource('news', 'API\NewsController');
Route::resource('album', 'API\AlbumController');

// ------ CUSTOM ROUTES FOR SPECIFIC APPROACH ----------------
Route::get('page/{id}/sections', 'API\SectionController@index');
Route::get('news/{id}/photo', 'API\NewsPhotoController@index');
Route::get('event/{id}/tag', 'API\ActivityTagController@index');
Route::get('album/{id}/photo', 'API\AlbumPhotoController@index');
Route::get('section/where/{slug}', 'FindSectionsController@index')->where(['slug' => '.*']);