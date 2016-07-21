<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = 'photos';
	protected $fillable =['id','saison_id','imageURL'];
	public $timestamps = false;
	protected $appends = ['serie'];

	public function saison()
	{
		return $this->belongsTo('App\Api\V1\Models\Saison');
	}
/*
	public function getSerieAttribute()
	{
		return $this->saison->serie;
	}
*/

}