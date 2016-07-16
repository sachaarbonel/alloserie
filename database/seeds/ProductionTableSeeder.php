<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Production;

class ProductionTableSeeder extends Seeder {

	public function run()
	{
		DB::table('productions')->delete();
		$json = File::get("database/data/productions.json");
        $data = json_decode($json);
        if (is_array($data) || is_object($data))
	{
        foreach ($data as $obj) {

		// ProductionTableSeeder
		Production::create(array(
			'id' => $obj->ProductionID,
            'imageProduction' => $obj->imageURL
			));
								}
	}
}
}