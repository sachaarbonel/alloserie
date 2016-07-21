<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class Teaser extends Model {

	protected $table = 'teasers';
	protected $fillable =['id','teaserable_id','teaserable_type','videoURL'];
	public $timestamps = false;

	public function teaserable()
	{
		return $this->morphTo();
	}

}