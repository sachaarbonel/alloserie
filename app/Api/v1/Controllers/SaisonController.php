<?php 

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Api\V1\Models\Saison;
use App\Api\V1\Models\Serie;
use App\Api\V1\Transformers\SaisonTransformer;

class SaisonController extends BaseController {

   /**
   * Retourne toutes les saisons d'une serie
   */
  public function getSaisonsList($id)
  {

   $allSaisons = Serie::findOrFail($id)->saisons;
   return $this->response->collection($allSaisons, new SaisonTransformer, ['key'=>'saisons']);
  }

 /**
   * Retourne toutes les infos d'une saison d'une serie
   *
   * @return Response
   */
/*  public function getSaisonInfos($id, $numero_saison)
  {

    $saison_infos = Saison::where([
    ['serie_id', '=', $id],
    ['numero', '=', $numero_saison],
])->get();

    return $this->response->item($saison_infos, new SaisonTransformer);
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