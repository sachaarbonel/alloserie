<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {

	protected $table = 'series';
	public $timestamps = false;

	public function saisons()
	{
		return $this->hasMany('App\Saison');
	}

	public function createurs()
	{
		return $this->hasMany('App\Createur');
	}

	public function genres()
	{
		return $this->hasMany('App\Genre');
	}

	public function productions()
	{
		return $this->hasMany('App\Production');
	}

	public function photos()
	{
		return $this->hasManyThrough('App\Photo', 'App\Saison', 'serie_id', 'saison_id');
	}

	public function teaser()
	{
		return $this->morphOne('App\Teaser', 'teaserable');
	}

	public function acteurs()
	{
		return $this->hasManyThrough('App\Acteur', 'App\Saison', 'serie_id', 'saison_id');
	}

	public function episodes()
	{
		return $this->hasManyThrough('App\Episode', 'App\Saison', 'serie_id', 'saison_id');
	}

}