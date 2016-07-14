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
	return View::make('hello');
});


Route::resource('serie', 'SerieController');
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
Route::resource('teaser', 'TeaserController');
