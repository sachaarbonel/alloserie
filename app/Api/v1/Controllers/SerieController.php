<?php 

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Api\V1\Models\Serie;
use Illuminate\Support\Facades\Input;
use App\Api\V1\Transformers\SerieTransformer;

class SerieController extends BaseController {

    /**
    * Pour une serie donnée retourne les infos sur chaque saison
    */

   public function getSerieInfos($id)
  {
     $allSeries = Serie::findOrFail($id);
   return $this->response->item($allSeries, new SerieTransformer);
  }

   /**
    * Retourne toutes les séries
    */
  public function getSeriesList()
  {
    $allSeries = Serie::paginate(10);
    return $this->response->paginator($allSeries, new SerieTransformer, ['key'=>'series']);
    
  }

   /**
    * Retourne toutes les séries populaires
    */
  public function getSeriesFilterPopulaire() //Ok
  {
    $note_spectateur = e(Input::get('note-spectateur',''));

    $series_populaires = Serie::where('note_spectateurs', '>=', $note_spectateur)->paginate(2);
     return $this->response->paginator($series_populaires, new SerieTransformer, ['key'=>'seriesPopulaires']);
  }

   /**
    * Retourne toutes les séries selon la nationalite
    */
  public function getSeriesFilterNationalite() //ok
  {
     $nationalite = e(Input::get('nationalite',''));
      $series_critere_nationalite = Serie::where('nationalite', '=', $nationalite)->paginate(2);
     return $this->response->paginator($series_critere_nationalite, new SerieTransformer);
  }
   /**
    * Retourne toutes les séries selon le statut
    */
  public function getSeriesFilterStatut() //Ok
  {
    $statut = e(Input::get('statut',''));
   $series_critere_statut = Serie::where('statut','=', $statut)->paginate(2);
     return $this->response->paginator($series_critere_statut, new SerieTransformer);
  }

    /**
    * Retourne toutes les séries selon la duree des episodes
    */
  public function getSeriesFilterDureeEpisode() // ok
  {
    $duree_episode = e(Input::get('duree',''));
    $series_critere_dureeEpisode = Serie::where('format', '>=', $duree_episode)->paginate(2);
     return $this->response->paginator($series_critere_nationalite, new SerieTransformer);
  }
    /**
    * Retourne toutes les séries selon le nombre de saisons
    */ /*  
  public function getSeriesFilterNombreSaisons() //ok
  {
    $nombre_saisons = e(Input::get('nombre',''));
 $series_critere_nationalite = Serie::where('nationalite', '>=', $nationalite)->paginate(2);
     return $this->response->paginator($series_critere_nationalite, new SerieTransformer);
  }*/

 /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>