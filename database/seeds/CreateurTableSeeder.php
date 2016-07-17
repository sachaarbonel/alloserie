<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Createur;

class CreateurTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/createurs.json");
        $data = json_decode($json,true);
        Createur::insert($data);
}
}