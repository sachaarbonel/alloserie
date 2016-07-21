<?php

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Photo;

class PhotoTransformer extends TransformerAbstract
{
    public function transform(Photo $photo)
    {
        return [
        		'photo_numero'  				     => $photo -> numero_saison,
  			    'imageURL'  				     => $photo -> imageURL
        ];
    }
}