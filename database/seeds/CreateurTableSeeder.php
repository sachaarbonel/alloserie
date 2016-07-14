<?php

use Illuminate\Database\Seeder;
use App\Api\v1\Createur;

class CreateurTableSeeder extends Seeder {

	public function run()
	{
		DB::table('createurs')->delete();
		$json = File::get("database/data/createurs.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

		// CreateurTableSeeder
		Createur::create(array(
			'id' => $obj->CreateurID,
            'nom' => $obj->NomCreateur,
            'photoURL' => $obj->PhotoCreateur
			));
								}
	}
}