<?php

namespace App\Api\v1;

use Illuminate\Database\Eloquent\Model;

class Acteur extends Model {

	protected $table = 'acteurs';
	public $timestamps = false;

	public function saisons()
	{
		return $this->belongsToMany('App\Saison');
	}

	public function series()
	{
		return $this->belongsToMany('App\Serie');
	}

}