<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model {

	protected $table = 'episodes';
	protected $fillable =['id','saison_id','synopsis','nom','numero'];
	public $timestamps = false;

	public function saison()
	{
		return $this->belongsTo('App\Api\V1\Models\Saison');
	}

	public function teaser()
	{
		return $this->morphOne('App\Api\V1\Models\Teaser', 'teaserable');
	}

}