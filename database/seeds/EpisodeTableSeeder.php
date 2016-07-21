<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Models\Episode;

class EpisodeTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/episodes.json");
        $data = json_decode($json,true);
        Episode::insert($data);
}
}