<?php

namespace App\Api\V1;

use Illuminate\Database\Eloquent\Model;

class Createur extends Model {

	protected $table = 'createurs';
	protected $fillable =['id','nom','photoURL'];
	public $timestamps = false;

	public function series()
	{
		return $this->belongsToMany('App\Api\V1\Serie');
	}

}