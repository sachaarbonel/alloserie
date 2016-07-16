<?php

namespace App\Api\V1;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = 'photos';
	public $timestamps = false;

	public function saison()
	{
		return $this->belongsTo('App\Api\V1\Saison');
	}

}