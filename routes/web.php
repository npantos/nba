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

Route::get('/', 'TeamsController@index')->name('teams');
Route::get('/teams', 'TeamsController@index')->name('teams');
Route::get('/teams/{id}', 'TeamsController@show')->name('teams');
Route::get('/players', 'PlayersController@index')->name('players');
Route::get('/players/{id}', 'PlayersController@show')->name('players');
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');
Route::get('/register/verify/{user_id}', 'RegisterController@verifyUser');
Route::get('/logout', 'LoginController@destroy');
Route::post('/login', 'LoginController@store');
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/comments', 'CommentsController@comments')->name('comments');
Route::get('/comments/forbidden', 'CommentsController@forbidden')->name('forbidden');
Route::get('/users/{id}', 'UsersController@show');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{id}', 'NewsController@show')->name('news');
Route::get('/news/team/{id}', 'NewsController@showTeams')->name('teamNews');