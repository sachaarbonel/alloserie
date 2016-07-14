<?php

use Illuminate\Database\Seeder;
use App\Api\v1\CreateurSerie;

class CreateurSerieTableSeeder extends Seeder {

	public function run()
	{
		DB::table('createur_serie')->delete();
		$json = File::get("database/data/createursSerie.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

		// CreateurSeriePivotTableSeeder
		CreateurSerie::create(array(
			'id' => $obj->CreateurSerieID,
            'createur_id' => $obj->CreateurID,
            'serie_id' => $obj->SerieID
			));
								}
	}
}