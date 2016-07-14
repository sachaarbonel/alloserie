<?php

use Illuminate\Database\Seeder;
use App\ProductionSerie;

class ProductionSerieTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('production_serie')->delete();

		// ProductionSeriePivotTableSeeder
		ProductionSerie::create(array(
			));
	}
}