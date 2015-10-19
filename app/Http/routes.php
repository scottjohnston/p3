<?php

/*  'Project 3 Scott Johnston dwa15-'
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
| explicit routes for loremIpsum
*/
Route::get('/loremIpsum', 'loremIpsumController@index');


Route::get('/loremIpsumController', 'loremIpsumController@getloremIpsum');

/*
| explicit routes for fake users
*/
Route::get('/fakeUsers', 'fakeUsersController@index');


Route::get('fakeUsersController', 'fakeUsersController@getFakeUsers');

/*
| explicit routes for xkcd password generator
*/
Route::get('/xkcd', 'xkcdController@index');


Route::get('xkcdGenerate', 'xkcdController@getPassword');
