<?php 

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Api\V1\Models\Production;

use Illuminate\Support\Facades\Input;
use App\Api\V1\Transformers\SerieTransformer;

class ProductionController extends BaseController {

    /**
    * Retourne toutes les séries selon la production
    */
  public function getSeriesFilterProduction() // ok
  {
    $production = e(Input::get('production',''));
    $series_critere_production = Production::where('production', '=', $production)->first()->series;
   return $this->response->collection($series_critere_production, new SerieTransformer, ['key'=>'seriesParProduction']);
  }

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