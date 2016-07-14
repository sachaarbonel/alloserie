<?php

use Illuminate\Database\Seeder;
use App\Api\v1\Production;

class ProductionTableSeeder extends Seeder {

	public function run()
	{
		DB::table('productions')->delete();
		$json = File::get("database/data/productions.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

		// ProductionTableSeeder
		Production::create(array(
			'id' => $obj->ProductionID,
            'imageProduction' => $obj->imageURL
			));
								}
	}
}