<?php

namespace App\Api\V1;

use Illuminate\Database\Eloquent\Model;

class CreateurSerie extends Model {

	protected $table = 'createur_serie';
	protected $fillable =['id','createur_id','serie_id'];
	public $timestamps = false;

}