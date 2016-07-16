<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Acteur;

class ActeurTableSeeder extends Seeder {

	public function run()
	{
		DB::table('acteurs')->delete();
		$json = File::get("database/data/acteurs.json");
        $data = json_decode($json);
        if (is_array($data) || is_object($data))
	{
        foreach ($data as $obj) {

		// ActeurTableSeeder
		Acteur::create(array(
			'id' => $obj->ActeurID,
            'saison_id' => $obj->SaisonID,
            'nom' => $obj->NomActeur,
            'role' => $obj->RoleActeur,
            'photoURL' => $obj->PhotoActeur
			));
								}
	}
}
}