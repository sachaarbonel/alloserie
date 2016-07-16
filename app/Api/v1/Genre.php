<?php

namespace App\Api\V1;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

	protected $table = 'genres';
	public $timestamps = false;

	public function series()
	{
		return $this->belongsToMany('App\Api\V1\Serie');
	}

}