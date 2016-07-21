<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class Production extends Model {

	protected $table = 'productions';
	protected $fillable =['id','imageURL'];
	public $timestamps = false;

	public function series()
	{
		return $this->belongsToMany('App\Api\V1\Models\Serie');
	}

}