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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', ['uses' => 'UserController@index']);
Route::get('login',  function() {
	return view('Login');
});

Route::post('loginAuth', [
	'uses' => 'UserController@loginUser',
	'as' => 'signin'
]);

Route::post('register', [
	'uses'	=> 'UserController@userRegistration',
	'as'	=> 'signup'
	]);

Route::resource('contacts', 'ContactController');