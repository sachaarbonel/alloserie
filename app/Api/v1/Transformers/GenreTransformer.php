<?php

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Genre;

class GenreTransformer extends TransformerAbstract
{
    public function transform(Genre $genre)
    {
        return [
  			    'genre'  				     => $genre -> nom
        ];
    }
}