<?php

use Illuminate\Database\Seeder;
use App\CreateurSerie;

class CreateurSerieTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('createur_serie')->delete();

		// CreateurSeriePivotTableSeeder
		CreateurSerie::create(array(
			));
	}
}