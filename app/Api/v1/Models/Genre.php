<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

	protected $table = 'genres';
	protected $fillable =['id','nom'];
	public $timestamps = false;

	public function series()
	{
		return $this->belongsToMany('App\Api\V1\Models\Serie');
	}

}