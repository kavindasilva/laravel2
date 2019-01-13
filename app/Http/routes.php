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

Route::get('/', function () {
    return view('welcome');
});


// First Route method –Root URL will matchthis method
Route::get('/', function () {
	return view('welcome');
});

// Second Route method –Root URL with ID will match this method
Route::get('ID/{id}',function($id){
	echo 'ID: '.$id;
});

// Third Route method –Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'ViratGandhi'){
	echo "Name: ".$name;
});





