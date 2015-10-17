<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');


/*
| Loads the form page for loremIpsum
*/
Route::get('/loremIpsum', 'loremIpsumController@index');

/*
| Loads the loremIpsum paragraphs requested
*/
Route::get('/loremIpsumController', 'loremIpsumController@getloremIpsum');

/*
| Loads the form page for fake users
*/
Route::get('/fakeUsers', 'fakeUsersController@index');

/*
| Loads gets the fake user data
*/
Route::get('fakeUsersController', 'fakeUsersController@getFakeUsers');








/*
|
| Practice routes
|
*/

Route::get('/practice', function() {

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Practice';

});


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
