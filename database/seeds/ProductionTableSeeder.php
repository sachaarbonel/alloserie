<?php

use Illuminate\Database\Seeder;
use App\Production;

class ProductionTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('productions')->delete();

		// ProductionTableSeeder
		Production::create(array(
			));
	}
}