<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;


class Saison extends Model {

	protected $table = 'saisons';
	protected $fillable =['id','note_spectateurs','serie_id','numero'];
	public $timestamps = false;

	public function serie()
	{
		return $this->belongsTo('App\Api\V1\Models\Serie');
	}

	public function photos()
	{
		return $this->hasMany('App\Api\V1\Models\Photo');
	}

	public function episodes()
	{
		return $this->hasMany('App\Api\V1\Models\Episode');
	}

	public function teaser()
	{
		return $this->morphOne('App\Api\V1\Models\Teaser', 'teaserable');
	}

	public function acteurs() //ok
	{
			
		return $this->belongsToMany('App\Api\V1\Models\Acteur');
	
		/*return $this->hasManyThrough('App\Api\V1\Models\Acteur');*/
	}

}