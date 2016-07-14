<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model {

	protected $table = 'productions';
	public $timestamps = false;

	public function series()
	{
		return $this->belongsToMany('App\Serie');
	}

}