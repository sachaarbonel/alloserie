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

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {



    $api->get('v1/hello', function()
    {
    	return "hello from dingo router";
    });

    //READ routes
 	$api->get('v1/series/list', ['as' => 'series.list', 'uses' => 'App\Api\V1\Controllers\SerieController@getSeriesList']); //good

 	$api->get('v1/serie/{id}', ['as' => 'serie.infos', 'uses' => 'App\Api\V1\Controllers\SerieController@getSerieInfos']); //good

 	$api->get('v1/serie/{id}/saisons', ['as' => 'saisons.list', 'uses' => 'App\Api\V1\Controllers\SaisonController@getSaisonsList']); //good
/*
 	$api->get('v1/serie/{id}/saison/{numero_saison}', ['as' => 'saison.infos', 'uses' => 'App\Api\V1\Controllers\SaisonController@getSaisonInfos']);  Plus besoin car la route juste avant le commentaire le fait

	$api->get('v1/serie/{id}/saison/{numero_saison}/photos', ['as' => 'saison.photos', 'uses' => 'App\Api\V1\Controllers\PhotoController@getPhotosSaison']); //idem
*/
	/*$api->get('v1/serie/{id}/saison/{numero_saison}/casting', ['as' => 'saison.casting', 'uses' => 'App\Api\V1\Controllers\ActeurController@getCastingSaison']); //idem*/

	$api->get('v1/series/genre/recherche', ['as' => 'series.genre.filter', 'uses' => 'App\Api\V1\Controllers\GenreController@getSeriesFilterGenre']); //good

	$api->get('v1/series/statut/recherche', ['as' => 'series.statut.filter', 'uses' => 'App\Api\V1\Controllers\SerieController@getSeriesFilterStatut']); //good

	$api->get('v1/series/nationalite/recherche', ['as' => 'series.nationalite.filter', 'uses' => 'App\Api\V1\Controllers\SerieController@getSeriesFilterNationalite']); //good

	$api->get('v1/series/populaire/recherche', ['as' => 'series.noteSpectateur.filter', 'uses' => 'App\Api\V1\Controllers\SerieController@getSeriesFilterPopulaire']);//good

/*	$api->get('v1/series/saisons/recherche', ['as' => 'series.nombreSaisons.filter', 'uses' => 'App\Api\V1\Controllers\SerieController@getSeriesFilterNombreSaisons']); // plus besoin, se fait en json*/ 

	$api->get('v1/series/episodes/recherche', ['as' => 'series.dureeEpisode.filter', 'uses' => 'App\Api\V1\Controllers\SerieController@getSeriesFilterDureeEpisode']); //good

	$api->get('v1/series/production/recherche', ['as' => 'series.production.filter', 'uses' => 'App\Api\V1\Controllers\ProductionController@getSeriesFilterProduction']);//good

	$api->get('v1/acteur/{id}/series', ['as' => 'acteur.series', 'uses' => 'App\Api\V1\Controllers\ActeurController@getSeriesActeur']); //pseudo good 

	$api->get('v1/createur/{id}/series', ['as' => 'createur.series', 'uses' => 'App\Api\V1\Controllers\CreateurController@getSeriesCreateur']); 

	$api->get('v1/acteurs/serie/list', ['as' => 'acteurs.list', 'uses' => 'App\Api\V1\Controllers\ActeurController@getActeursList']); 

	$api->get('v1/genres/serie/list', ['as' => 'genres.list', 'uses' => 'App\Api\V1\Controllers\GenreController@getGenresList']); 
 
	$api->get('v1/serie/{id}/acteurs', ['as' => 'serie.casting', 'uses' => 'App\Api\V1\Controllers\ActeurController@getCastingSerie']); 

	//reste à faire CREATE UPDATE DELETE 

});
