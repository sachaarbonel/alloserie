<?php

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Createur;

class CreateurTransformer extends TransformerAbstract
{
    public function transform(Createur $createur)
    {
        return [
        		'id'  				     => $createur -> id,
  			    'createur'  				     => $createur -> nom,
  			    'photoURL'  				     => $createur -> photoURL
        ];
    }
}