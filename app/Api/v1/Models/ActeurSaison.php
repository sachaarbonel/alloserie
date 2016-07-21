<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class ActeurSaison extends Model {

	protected $table = 'acteur_saison';
	protected $fillable =['id','acteur_id','saison_id','role'];
	public $timestamps = false;

}