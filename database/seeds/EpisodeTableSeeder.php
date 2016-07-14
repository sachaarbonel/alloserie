<?php

use Illuminate\Database\Seeder;
use App\Api\v1\Episode;

class EpisodeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('episodes')->delete();
		$json = File::get("database/data/episodes.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

		// EpisodeTableSeeder
		Episode::create(array(
			'id' => $obj->EpisodeID,
			'saison_id' => $obj->SaisonID,
            'synopsis' => $obj->EpisodeSynopsis,
            'nom' => $obj->NomEpisode,
            'numero' => $obj->NumeroEpisode
			));
								}						
	}
}