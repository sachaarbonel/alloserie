<?php

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Production;

class ProductionTransformer extends TransformerAbstract
{
    public function transform(Production $production)
    {
        return [
        		'id'  				     => $production -> id,
  			    'production'  				     => $production -> production
        ];
    }
}