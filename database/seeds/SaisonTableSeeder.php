<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Models\Saison;

class SaisonTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/saisons.json");
        $data = json_decode($json,true);
        Saison::insert($data);
}
}