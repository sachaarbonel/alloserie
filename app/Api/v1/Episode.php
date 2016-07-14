<?php

namespace App\Api\v1;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model {

	protected $table = 'episodes';
	public $timestamps = false;

	public function saison()
	{
		return $this->belongsTo('App\Saison');
	}

	public function teaser()
	{
		return $this->morphOne('App\Teaser', 'teaserable');
	}

}