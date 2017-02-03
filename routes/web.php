<?php


Route::get('/cropper', 'ImageHelperController@index');
Route::resource('photo', 'PhotosController');

Route::group(['prefix' => 'cms'],  function () {
    Route::group(['middleware' => ['auth']], function(){

    	// --- CORE ROUTES ONLY
        Route::get('/logout', 'LogOutController@index');
        Route::get('/', 'CmsController@index');

        // ----------------- GENERIC ROUTES FOR EVERY PROJECT GO HERE ----------

        Route::resource('page', 'PageController');
        Route::resource('section', 'SectionController');


        // ------ CUSTOM ROUTES GO UNDERNEATH HERE ----------------


    });
});

Route::get('/', 'PagesController@homepage');
Route::get('/agenda', 'PagesController@agenda');
Route::get('/nieuws', 'PagesController@nieuws');
Route::get('/fotos', 'PagesController@fotos');
Route::get('/over-ons', 'PagesController@over_ons');
Route::get('/ruimtes', 'PagesController@ruimtes');
Route::get('/contact', 'PagesController@contact');


Route::auth();
Auth::routes();