<?php

use Illuminate\Database\Seeder;
use App\Api\V1\ProductionSerie;

class ProductionSerieTableSeeder extends Seeder {

	public function run()
	{
		DB::table('production_serie')->delete();
		$json = File::get("database/data/productionsSerie.json");
        $data = json_decode($json);
        if (is_array($data) || is_object($data))
	{
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
}