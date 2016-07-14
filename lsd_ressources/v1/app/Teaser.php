<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teaser extends Model {

	protected $table = 'teasers';
	public $timestamps = false;

	public function teaserable()
	{
		return $this->morphTo();
	}

}