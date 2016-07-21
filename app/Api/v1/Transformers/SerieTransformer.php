<?php

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Serie;

class SerieTransformer extends TransformerAbstract
{
    public function transform(Serie $serie)
    {

        $genres = new GenreTransformer();
        $createurs = new CreateurTransformer();
        $productions = new ProductionTransformer();
        $saisons = new SaisonTransformer();
        return [
            'id'  				     => $serie -> id,
  			    'nom'  				     => $serie -> note_presse,
            'note_presse' 		 => $serie -> note_presse,
            'note_spectateurs' => $serie -> note_spectateurs,
  			    'nombre_fan'  		 => $serie -> nombre_fan,
                
            'createurs'           =>  $serie->createurs->transform(

                 function($i) use ($createurs) 
                 {
                    return $createurs->transform($i);
                 }
            ),
  			    'productions'  			   =>  $serie->productions->transform(

                 function($i) use ($productions) 
                 {
                    return $productions->transform($i);
                 }
            ),
             'genres'          =>  $serie->genres->transform(

                             function($i) use ($genres) 
                             {
                                return $genres->transform($i);
                             }
                        ),
             
            'nombre_saisons' => $serie -> saisons -> count(),
                'saisons'          =>  $serie->saisons->transform(

                                     function($i) use ($saisons) 
                                     {
                                        return $saisons->transform($i);
                                     }
                                ),
            'nationalite' 		=> $serie -> nationalite,
            'statut' 			    => $serie -> statut,
			      'format'  			  => $serie -> format,
            'synopsis' 			  => $serie -> synopsis,
            'miniatureURL' 		=> $serie -> miniatureURL,
            'posterURL' 		  => $serie -> posterURL






        ];
    }
}