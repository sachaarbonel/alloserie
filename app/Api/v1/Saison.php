<?php

namespace App\Api\V1;

use Illuminate\Database\Eloquent\Model;

class Saison extends Model {

	protected $table = 'saisons';
	protected $fillable = ['numero'];
	public $timestamps = false;

	public function serie()
	{
		return $this->belongsTo('App\Api\V1\Serie');
	}

	public function photos_saison()
	{
		return $this->hasMany('App\Api\V1\Photo');
	}

	public function episodes()
	{
		return $this->hasMany('App\Api\V1\Episode');
	}

	public function teaser()
	{
		return $this->morphOne('App\Api\V1\Teaser', 'teaserable');
	}

	public function acteurs()
	{
		return $this->hasMany('App\Api\V1\Acteur');
	}

}