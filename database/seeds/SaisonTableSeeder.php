<?php

use Illuminate\Database\Seeder;
use App\Saison;

class SaisonTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('saisons')->delete();

		// SaisonTableSeeder
		Saison::create(array(
			));
	}
}