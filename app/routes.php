<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

Route::post('/foo' ,'UserController@login');


// Route::get('user/{name?}', function($name = null)
// {
//     return $name;
// });

Route::get('user/profile', array('as' => 'profile', 'uses' => 'UserController@showProfile'));