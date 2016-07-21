<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class GenreSerie extends Model {

	protected $table = 'genre_serie';
	protected $fillable =['id','genre_id','serie_id'];
	public $timestamps = false;

}