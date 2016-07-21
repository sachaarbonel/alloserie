<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Models\Production;

class ProductionTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/productions.json");
        $data = json_decode($json,true);
        Production::insert($data);
}
}