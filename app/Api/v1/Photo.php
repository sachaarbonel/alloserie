<?php

namespace App\Api\V1;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = 'photos';
	protected $fillable =['id','saison_id','imageURL'];
	public $timestamps = false;

	public function saison()
	{
		return $this->belongsTo('App\Api\V1\Saison');
	}

}