<?php

namespace App\Api\V1\Models;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model {

	protected $table = 'acteurs';
	protected $fillable =['id','nom','photoURL'];
	public $timestamps = false;


	public function saisons() //ok
	{
		return $this->belongsToMany('App\Api\V1\Models\Saison');
	}



}