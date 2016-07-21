<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class ProductionSerie extends Model {

	protected $table = 'production_serie';
	protected $fillable =['id','production_id','serie_id'];
	public $timestamps = false;

}