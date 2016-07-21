<?php 

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Api\V1\Models\Genre;
use Illuminate\Support\Facades\Input;
use App\Api\V1\Transformers\SerieTransformer;

class GenreController extends BaseController {


  /**
  *  renvoie la liste de tous les genres
  */

  public function getGenresList()
  {
    return "getGenresList() function";
  }
  
  /**
    * Retourne toutes les séries selon le genre
    */
  public function getSeriesFilterGenre() // ok
  {
    $genre = e(Input::get('genre',''));
    $series_critere_genre = Genre::where('nom', '=', $genre)->first()->series;
   return $this->response->collection($series_critere_genre, new SerieTransformer, ['key'=>'seriesParGenre']);
 
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