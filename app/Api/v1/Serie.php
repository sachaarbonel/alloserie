<?php

namespace App\Api\V1;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {

	protected $table = 'series';
	protected $fillable =['id','note_presse','note_spectateurs','nombre_fan','nationalite','statut','format','synopsis','miniatureURL','nom','posterURL'];
	public $timestamps = false;

	public function saisons()
	{
		return $this->hasMany('App\Api\V1\Saison');
	}

	public function createurs()
	{
		return $this->hasMany('App\Api\V1\Createur');
	}

	public function genres()
	{
		return $this->hasMany('App\Api\V1\Genre');
	}

	public function productions()
	{
		return $this->hasMany('App\Api\V1\Production');
	}

	public function photos()
	{
		return $this->hasManyThrough('App\Api\V1\Photo', 'App\Api\V1\Saison', 'serie_id', 'saison_id');
	}

	public function teaser()
	{
		return $this->morphOne('App\Api\V1\Teaser', 'teaserable');
	}

	public function acteurs()
	{
		return $this->hasManyThrough('App\Api\V1\Acteur', 'App\Api\V1\Saison', 'serie_id', 'saison_id');
	}

	public function episodes()
	{
		return $this->hasManyThrough('App\Api\V1\Episode', 'App\Api\V1\Saison', 'serie_id', 'saison_id');
	}

}