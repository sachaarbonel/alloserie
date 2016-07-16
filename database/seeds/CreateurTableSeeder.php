<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Createur;

class CreateurTableSeeder extends Seeder {

	public function run()
	{
		DB::table('createurs')->delete();
		$json = File::get("database/data/createurs.json");
        $data = json_decode($json);
        if (is_array($data) || is_object($data))
	{
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
}