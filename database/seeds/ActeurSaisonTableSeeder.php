<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Models\ActeurSaison;

class ActeurSaisonTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/acteursSaison.json");
        $data = json_decode($json,true);
        ActeurSaison::insert($data);
}
}