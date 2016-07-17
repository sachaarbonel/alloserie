<?php

namespace App\Api\V1;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model {

	protected $table = 'episodes';
	protected $fillable =['id','saison_id','synopsis','nom','numero'];
	public $timestamps = false;

	public function saison()
	{
		return $this->belongsTo('App\Api\V1\Saison');
	}

	public function teaser()
	{
		return $this->morphOne('App\Api\V1\Teaser', 'teaserable');
	}

}