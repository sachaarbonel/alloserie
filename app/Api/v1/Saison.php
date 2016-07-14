<?php

namespace App\Api\v1;

use Illuminate\Database\Eloquent\Model;

class Saison extends Model {

	protected $table = 'saisons';
	public $timestamps = false;

	public function serie()
	{
		return $this->belongsTo('App\Serie');
	}

	public function photos_saison()
	{
		return $this->hasMany('App\Photo');
	}

	public function episodes()
	{
		return $this->hasMany('App\Episode');
	}

	public function teaser()
	{
		return $this->morphOne('Teaser', 'teaserable');
	}

	public function acteurs()
	{
		return $this->hasMany('App\Acteur');
	}

}