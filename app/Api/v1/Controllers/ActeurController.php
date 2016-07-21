<?php 
namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Api\V1\Models\Acteur;
use App\Api\V1\Models\ActeurSaison;
use App\Api\V1\Transformers\ActeurSaisonTransformer;



class ActeurController extends BaseController {


  /**
  *  Renvoie le casting d’une saison
  */
  public function getCastingSaison($id,$numero_saison)
  {
    return "getCastingSaison(".$id.",".$numero_saison.") function";
  }
    /**
  *  Renvoie le casting d’une serie
  */
  public function getCastingSerie($id)
  {
    return "getCastingSerie(".$id.") function";
  }

 /**
  *  Renvoie les series dans lesquelles a joué un acteur
  */
  public function getSeriesActeur($id)
  {

     $acteurs = ActeurSaison::join('saisons', 'acteur_saison.saison_id', '=', 'saisons.id')->where('acteur_saison.acteur_id','=',$id)
            ->join('series', 'serie_id', '=', 'series.id')
            ->select('series.*')->get();
return $this->response->item($acteurs, new ActeurSaisonTransformer);

  }

/**
  *  Renvoie le casting d’une saison
  */
  public function getActeursList()
  {
    return "getActeursList() function";
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(){
 
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