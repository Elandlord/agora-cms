<?php


Route::get('/cropper', 'ImageHelperController@index');
Route::resource('photo', 'PhotosController');

Route::group(['prefix' => 'cms'],  function () {
    Route::group(['middleware' => ['auth']], function(){

    	// --- CORE ROUTES ONLY
        Route::get('/logout', 'LogOutController@index');
        Route::get('/', 'DashboardController@index');

        // ----------------- GENERIC ROUTES FOR EVERY PROJECT GO HERE ----------

        Route::resource('page', 'PageController');
        Route::resource('section', 'SectionController');


        // ------ CUSTOM ROUTES GO UNDERNEATH HERE ----------------
        Route::resource('event', 'EventController');
        Route::resource('news', 'NewsController');
        Route::resource('album', 'AlbumController');
        Route::resource('photo/album', 'PhotoAlbumController');


    });
});

Route::get('/', 'HomepageController@entryPointVue');
// Route::get('/agenda', 'AgendaController@index');
// Route::get('/nieuws', 'NieuwsController@index');
// Route::get('/fotos', 'FotosController@index');
// Route::get('/over-ons', 'OverOnsController@index');
// Route::get('/ruimtes', 'RuimtesController@index');
// Route::get('/contact', 'ContactController@index');

// MAILING ROUTES
Route::post('/mail/contact-mail', 'MailController@contactMail');


Route::auth();
Auth::routes();