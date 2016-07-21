<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Models\ProductionSerie;

class ProductionSerieTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/productionsSerie.json");
        $data = json_decode($json,true);
        ProductionSerie::insert($data);
}
}