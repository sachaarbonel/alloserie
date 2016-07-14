<?php

use Illuminate\Database\Seeder;
use App\Serie;

class SerieTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('series')->delete();

		// SerieTableSeeder
		Serie::create(array(
			));
	}
}