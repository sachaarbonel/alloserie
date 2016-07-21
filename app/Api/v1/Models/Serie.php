<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {

	protected $table = 'series';
	protected $fillable =['id','note_presse','note_spectateurs','nombre_fan','nationalite','statut','format','synopsis','miniatureURL','nom','posterURL'];
	public $timestamps = false;

	public function saisons()
	{
		return $this->hasMany('App\Api\V1\Models\Saison');
	}

	public function createurs()
	{
		return $this->belongsToMany('App\Api\V1\Models\Createur');
	}

	public function genres()
	{
		return $this->belongsToMany('App\Api\V1\Models\Genre');
	}

	public function productions()
	{
		return $this->belongsToMany('App\Api\V1\Models\Production');
	}

	public function photos()
	{
		return $this->hasManyThrough('App\Api\V1\Models\Photo', 'App\Api\V1\Models\Saison', 'serie_id', 'saison_id');
	}

	public function teaser()
	{
		return $this->morphOne('App\Api\V1\Models\Teaser', 'teaserable');
	}

	public function acteurs() //pas ok
	{
		return $this->hasManyThrough('App\Api\V1\Models\ActeurSaison', 'App\Api\V1\Models\Saison', 'serie_id', 'saison_id');
	}

	public function episodes()
	{
		return $this->hasManyThrough('App\Api\V1\Models\Episode', 'App\Api\V1\Models\Saison', 'serie_id', 'saison_id');
	}

	

}