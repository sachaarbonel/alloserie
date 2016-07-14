<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Createur extends Model {

	protected $table = 'createurs';
	public $timestamps = false;

	public function series()
	{
		return $this->belongsToMany('App\Serie');
	}

}