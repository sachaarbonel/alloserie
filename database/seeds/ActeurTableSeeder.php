<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Acteur;

class ActeurTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/acteurs.json");
        $data = json_decode($json,true);
        Acteur::insert($data);
}
}