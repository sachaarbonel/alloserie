<?php

use Illuminate\Database\Seeder;
use App\Api\V1\CreateurSerie;

class CreateurSerieTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/createursSerie.json");
        $data = json_decode($json,true);
        CreateurSerie::insert($data);
}
}