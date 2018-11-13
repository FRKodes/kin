<?php

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

Route::get('/clear', function() {
    
	Artisan::call('config:cache');
	Artisan::call('config:clear');
	Artisan::call('cache:clear');

    return 'Cache is cleared';
});

Route::get('/', 'PagesController@index');
Route::post('sendmail', 'MailController@send');


Route::get('mail/send', 'MailController@send');
