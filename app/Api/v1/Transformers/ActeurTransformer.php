<?php

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Acteur;

class ActeurTransformer extends TransformerAbstract
{
    public function transform(Acteur $acteur)
    {

       $acteursSaison = new ActeurSaisonTransformer();
        return [
        		'id'  				     => $acteur -> id,
  			    'acteur'  				     => $acteur -> nom,
  			    'photoURL'  				     => $acteur -> photoURL
        ];
    }
}