<?php

namespace App\Api\V1;

use Illuminate\Database\Eloquent\Model;

class Acteur extends Model {

	protected $table = 'acteurs';
	protected $fillable =['id','saison_id','nom','nom','role','photoURL'];
	public $timestamps = false;

	public function saisons()
	{
		return $this->belongsToMany('App\Api\V1\Saison');
	}

	public function series()
	{
		return $this->belongsToMany('App\Api\V1\Serie');
	}

}