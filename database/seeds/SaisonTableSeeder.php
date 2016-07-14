<?php

use Illuminate\Database\Seeder;
use App\Api\v1\Saison;

class SaisonTableSeeder extends Seeder {

	public function run()
	{
		DB::table('saisons')->delete();
		$json = File::get("database/data/saisons.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

		// SaisonTableSeeder
		Saison::create(array(
			'id' => $obj->SaisonID,
            'note_spectateurs' => $obj->NoteSaison,
            'serie_id' => $obj->SerieID,
            'numero' => $obj->NumeroSaison
			));
								}
	}
}