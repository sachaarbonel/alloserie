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
	return view('Welcome');
});


/*Route::resource('serie', 'SerieController');
Route::resource('saison', 'SaisonController');
Route::resource('photo', 'PhotoController');
Route::resource('acteur', 'ActeurController');
Route::resource('createur', 'CreateurController');
Route::resource('episode', 'EpisodeController');
Route::resource('genre', 'GenreController');
Route::resource('production', 'ProductionController');
Route::resource('createurserie', 'CreateurSerieController');
Route::resource('genreserie', 'GenreSerieController');
Route::resource('productionserie', 'ProductionSerieController');
Route::resource('teaser', 'TeaserController');*/






$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('hello', function()
    {
    	return "Fuck";
    });
});


$api->version('v1', function ($api) {
 	
 	//test qui fonctionne

 	$api->get('acteurs', ['as' => 'acteurs.index', 'uses' => 'App\Api\V1\Controllers\ActeurController@index']);
 	/*//Acteur routes
	$api->get('acteurs/{id}', ['as' => 'acteurs.show', 'uses' => 'Api\v1\ActeurController@show']);
 
	$api->get('acteurs/{id}', ['as' => 'acteurs.edit', 'uses' => 'Api\v1\ActeurController@edit']);

 	$api->get('acteurs/{id}', ['as' => 'acteurs.update', 'uses' => 'Api\v1\ActeurController@update']);

 	$api->get('acteurs/{id}', ['as' => 'acteurs.destroy', 'uses' => 'Api\v1\ActeurController@destroy']);

 	$api->get('acteurs', ['as' => 'acteurs.index', 'uses' => 'Api\v1\ActeurController@index']);

 	$api->get('acteurs', ['as' => 'acteurs.create', 'uses' => 'Api\v1\ActeurController@create']);

 	$api->get('acteurs', ['as' => 'acteurs.store', 'uses' => 'Api\v1\ActeurController@store']);*/

/*
 	//Createur routes
	$api->get('createurs/{id}', ['as' => 'createurs.show', 'uses' => 'Api\v1\CreateurController']);

	$api->get('createurs/{id}', ['as' => 'createurs.edit', 'uses' => 'Api\v1\CreateurController@edit']);

 	$api->get('createurs/{id}', ['as' => 'createurs.update', 'uses' => 'Api\v1\CreateurController@update']);

 	$api->get('createurs/{id}', ['as' => 'createurs.destroy', 'uses' => 'Api\v1\CreateurController@destroy']);

 	$api->get('createurs', ['as' => 'createurs.index', 'uses' => 'Api\v1\CreateurController@index']);

 	$api->get('createurs', ['as' => 'createurs.create', 'uses' => 'Api\v1\CreateurController@create']);

 	$api->get('createurs', ['as' => 'createurs.store', 'uses' => 'Api\v1\CreateurController@store']);


 	//Episode Routes
 	$api->get('createurs/{id}', ['as' => 'createurs.show', 'uses' => 'Api\v1\createurController@show']);

	$api->get('createurs/{id}', ['as' => 'createurs.edit', 'uses' => 'Api\v1\createurController@edit']);

 	$api->get('createurs/{id}', ['as' => 'createurs.update', 'uses' => 'Api\v1\createurController@update']);

 	$api->get('createurs/{id}', ['as' => 'createurs.destroy', 'uses' => 'Api\v1\createurController@destroy']);

 	$api->get('createurs', ['as' => 'createurs.index', 'uses' => 'Api\v1\createurController@index']);

 	$api->get('createurs', ['as' => 'createurs.create', 'uses' => 'Api\v1\createurController@create']);

 	$api->get('createurs', ['as' => 'createurs.store', 'uses' => 'Api\v1\createurController@store']);
*/
});