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

Route::get('/', [ 'as' => 'overview', function () {
    return view('overview');
}]);

Route::get('/unavailable', [ 'as' => 'unavailable', function() {
	return view('unavailable');
}]);

Route::get('/recipes', [
	'as' => 'recipes',
	'uses' => 'RecipeController@search',
]);
Route::get('/recipes/{id}', [
	'as' => 'recipes.view',
	'uses' => 'RecipeController@view',
]);
