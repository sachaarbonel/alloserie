<?php

use Illuminate\Database\Seeder;
use App\Api\v1\ProductionSerie;

class ProductionSerieTableSeeder extends Seeder {

	public function run()
	{
		DB::table('production_serie')->delete();
		$json = File::get("database/data/productionsSerie.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

		// ProductionSeriePivotTableSeeder
		ProductionSerie::create(array(
			'id' => $obj->ProductionSerieID,
            'production_id' => $obj->ProductionID,
            'serie_id' => $obj->SerieID
			));
								}
	}
}