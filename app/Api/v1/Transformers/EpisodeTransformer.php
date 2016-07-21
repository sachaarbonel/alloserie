<?php

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Episode;

class EpisodeTransformer extends TransformerAbstract
{
    public function transform(Episode $episode)
    {
        return [
        		'episode_numero'  				     => $episode -> numero,
  			    'synopsis'  				     => $episode -> synopsis
        ];
    }
}