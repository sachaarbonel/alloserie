<?php

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Saison;

class SaisonTransformer extends TransformerAbstract
{
    public function transform(Saison $saison)
    {
    	$photos = new PhotoTransformer();
    	$casting = new ActeurTransformer();
        $episodes = new EpisodeTransformer();
        return [
        		'saison_numero'  				     => $saison -> numero,
  			    'note_spectateurs'  				     => $saison -> note_spectateurs,
                'nombre_photos'                       => $saison -> photos ->count(),
  			    'photos'          =>  $saison->photos->transform(

                             function($i) use ($photos) 
                             {
                                return $photos->transform($i);
                             }
                        ),
  			    'casting'          =>  $saison->acteurs->transform(

                             function($i) use ($casting) 
                             {
                                return $casting->transform($i);
                             }
                        ),
                'nombre_episodes'                       => $saison -> episodes -> count(),
  			    'episodes'          =>  $saison->episodes->transform(

                             function($i) use ($episodes) 
                             {
                                return $episodes->transform($i);
                             }
                        ),
        ];
    }
}