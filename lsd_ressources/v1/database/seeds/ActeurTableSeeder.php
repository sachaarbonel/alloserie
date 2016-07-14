<?php

use Illuminate\Database\Seeder;
use App\Acteur;

class ActeurTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('acteurs')->delete();

		// ActeurTableSeeder
		Acteur::create(array(
			));
	}
}