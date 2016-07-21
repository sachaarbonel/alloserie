<?php

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Acteur;
use App\Api\V1\Models\Serie;

class ActeurSaisonTransformer extends TransformerAbstract
{
    public function transform(ActeurSaison $acteurSaison)
    {
        
        return [
            'role'  				     => $acteurSaison -> role,

        ];
    }
}