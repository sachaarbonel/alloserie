<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Episode;

class EpisodeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('episodes')->delete();
		$json = File::get("database/data/episodes.json");
        $data = json_decode($json);
        if (is_array($data) || is_object($data))
	{
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
}